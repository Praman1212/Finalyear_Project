<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Registers;

class ProductController extends Controller
{
    public function index(){
        return view('index');
    }
    public function product_details(){
        return view('product-details');
    }
    public function checkout(){
        return view('checkout');
    }
}
