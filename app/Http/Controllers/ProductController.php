<?php
namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'Soccer ball', 
       'description' => 'NEW STAR soccer ball, compressed leather, model NS300-400-500, code 31371-58-72',
       'price' => 259,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2021/05/800_31372-510x510.jpg'],
        ['id' => 2, 'name' => 'Volleyball ball', 
       'description' => 'Volleyball New Star NV300 3 colors, code 33325', 
       'price' => 370,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2023/05/321.jpg'],
        ['id' => 3, 'name' => 'Mitt', 
       'description' => 'PRO training gloves, artificial leather No.007', 
       'price' => 1450,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2019/07/222-1.jpg'],
       ['id' => 4, 'name' => 'Basket ball', 
       'description' => 'SUPER STAR Chair Ball Super Star Rubber CB5000', 
       'price' => 250,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2024/02/38-3-06_SUPER-STAR-CB5000.png'],
       ['id' => 5, 'name' => 'Takraw ball', 
       'description' => 'Takraw MARATHON Model 101', 
       'price' => 270,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2020/08/70504-.jpg'],
       ['id' => 6, 'name' => 'Futsal ball', 
       'description' => 'SUPER STAR Futsal Super Star Compressed Leather No. FS2700 31642', 
       'price' => 395,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2021/01/35-1.jpg'],
       ['id' => 7, 'name' => 'Badminton', 
       'description' => 'Badminton racket FBT CLUB SPORT set of 2 rackets 51395', 
       'price' => 320,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2023/10/51395-%E0%B9%81%E0%B8%94%E0%B8%87%E0%B8%8A%E0%B8%A1%E0%B8%9E%E0%B8%B9.jpg'],
       ['id' => 8, 'name' => 'Tennis ball', 
       'description' => 'Can be used for playing and practicing for a long time. The ball is durable.', 
       'price' => 40,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2023/10/52320.jpg'],
       ['id' => 9, 'name' => 'Small cone cover', 
       'description' => 'Small cone cover, code 32312', 
       'price' => 140,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2020/03/32312-01.jpg'],
       ['id' => 10, 'name' => 'Airy cone', 
       'description' => 'Transparent cone, height 9, soft plastic, sports cone, training cone, Marker 32362-4', 
       'price' => 70,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2023/03/32362-%E0%B8%81%E0%B8%A3%E0%B8%A7%E0%B8%A2%E0%B9%82%E0%B8%9B%E0%B8%A3%E0%B9%88%E0%B8%87.jpg'],
       ['id' => 11, 'name' => 'Jump rope', 
       'description' => 'Nylon Jump Rope 47402', 
       'price' => 60,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2019/07/47402-ORANGE-merged.jpg'],
       ['id' => 12, 'name' => 'Stopwatch', 
       'description' => 'Stopwatch No.322 Code 61320', 
       'price' => 340,'img'
       => 'https://shop.fbtsports.com/wp-content/uploads/2019/07/61-320.jpg'],
        ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
          abort(404, 'Product not found');
    }
    return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
