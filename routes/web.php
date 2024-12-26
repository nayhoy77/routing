<?php
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/chot', function () {
    return 'Hello World';
});

use App\Http\Controllers\ProductController;

Route::get('/user', [UserController::class, 'index']);

// Route::get('/user/{id}', function (string $id) {
//     return 'User '.$id;
// });

Route::get('/user/{user}', [UserController::class, 'show']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show'])->middleware(['auth']); // โชว์รายละเอียดของสินค้า,เข้าหน้าล็อคอินก่อนจเข้าดูรายการสินค้า

Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);
Route::resource('product', ProductController::class)
    ->only(['index', 'show'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
