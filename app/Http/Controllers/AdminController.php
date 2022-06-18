<?php

namespace App\Http\Controllers;

use App\Models\saveProducts;
use App\Models\saveCategory;
use Illuminate\Http\Request;

// For products
class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function productForm(){
        return view('admin.productForm');
    }
    public function categoryForm(){
        return view('admin.categoryForm');
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
        return redirect('/admin/index');
    }

    // Details about the products
    public function viewProducts()
    {
        $details = saveProducts::all();
        return view('admin.details.productcrud', compact('details'));
    }
    public function deleteProduct($id){
        $product = saveProducts::find($id);
        $product->delete();
        return-redirect('/admin/productcrud');
    }
    // For category



    public function saveCategory(Request $req){
        $category =  new saveCategory;
        $category->category_name = $req->category_name;
        $category->category_id = $req->category_id;
        $category->save();
        return view('admin.categoryForm');
    }

    public function viewCategory(){
        $details = saveCategory::all();
        return view('admin.details.categorycrud',compact('details'));
    }
    public function deleteCategory(){

    }
}
