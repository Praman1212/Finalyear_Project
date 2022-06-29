<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saveProducts;

class ProductController extends Controller
{
    public function index(){
        $info = saveProducts::all();
        return view('index', compact('info'));
    }
    public function product_details(){
        return view('product-details');
    }
    public function checkout(){
        return view('checkout');
    }

    // Details of products sending on user page
    // public function userProduct(){
    //     $info = saveProducts::all();
    //     return view('home', compact('info'));
    // }
}
