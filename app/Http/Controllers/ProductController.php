<?php

namespace App\Http\Controllers;

use App\Models\saveProducts;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Registers;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function product_details()
    {
        return view('product-details');
    }
    public function checkout()
    {
        return view('checkout');
    }

    public function cart()
    {
        return view('cart');
    }

    public function addcart(Request $request, $id)
    {
        //check user after user login is done
        // if (Auth::id()) {
        //     return redirect()->back();
        // } else {
        //     return redirect('login');
        // }

        $product = saveProducts::find($id);
        $cart = new cart;
        $cart->name = "user name1"; //logged username $user->name
        $cart->phone = "9867123456";
        $cart->address = "user address1";
        $cart->product_title = "product_title1"; //$product->title
        $cart->price = "product price1";
        $cart->quantity = "1";
        $cart->save();
        return redirect()->back()->with('message','Product Added to Cart.');
    }
}
