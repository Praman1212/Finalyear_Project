<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('index');
    }
    public function login(){
        return view('login');
    }
    public function product_details(){
        return view('product-details');
    }
    public function checkout(){
        return view('checkout');
    }
}
