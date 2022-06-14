<?php

namespace App\Http\Controllers;

use App\Models\saveProducts;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function productForm(){
        return view('admin.productForm');
    }
    public function manageCategory(){
        return view('admin.category.manageCategory');
    }

    // To add the products it will save in this function
    public function saveProducts(Request $req){
        $product = new saveProducts;
        $product->product_name = $req->product_name;
        $product->product_id = $req->product_id;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->image = $req->image;
        $product->save();
        return redirect();
    }

    // Details about the products
    public function viewProducts()
    {
        $details = saveProducts::all();
        return view('admin.details.productcrud', compact('details'));
    }
}
