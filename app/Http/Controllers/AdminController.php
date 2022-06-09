<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function productForm(){
        return view('admin.productForm');
    }
    public function manageProduct(){
        return view('admin.category.manageCategory');
    }
}
