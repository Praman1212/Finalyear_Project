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
    public function saveProducts(Request $request){

        $request->validate([
            'product_name' => 'required',
            'product_id' => 'required',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        saveProducts::create($input);
     
        return redirect('/admin/index');
    }

    // Details about the products
    public function viewProducts()
    {
        $details = saveProducts::all();
        return view('admin.details.productcrud', compact('details'));
    }


    // Details for users page

    public function destroyProduct($id)
    {
        // $crud->delete();
        // return redirect('/');
        $saveProducts = saveProducts::find($id);
        $saveProducts->delete();

        return redirect('/admin/index');
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
}
