<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource. ข้อมูลทั้งหมด
     */
    public function index()
    {
        return "User Page";
    }

    /**
     * Show the form for creating a new resource. โชว์ฟอม
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. นำข้อมูลจากฟอมเก็บลงฐานข้อมูล
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource. แสดงรายละเอียดของข้อมูล
     */
    public function show(string $user)
    {
        return "User Page".$user;
    }

    /**
     * Show the form for editing the specified resource.แบบฟอม
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.แบบจัดการ
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.จัดการลบในฐานข้อมูล
     */
    public function destroy(User $user)
    {
        //
    }
}
