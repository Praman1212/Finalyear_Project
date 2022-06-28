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
        //user auth vayesi user line ra pass garne
        //$user=auth()->user();
        //cart object pass garne
        $cart = cart::where('phone', '9867123456')->get();
        //$product_title = $cart->product_title; //raplace phone by $user->phone
        $count = $cart->count();
        if ($count == 0) {
            return view('cart', compact('cart', 'count'));
        } else {
            return view('cart', compact('cart', 'count'));
        }
    }

    public static function cartItemImage($id)
    {
        $image = saveProducts::where('id', $id)->value('image');
        return $image;
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
        $cart->price = "200";
        $cart->quantity = "1";
        $cart->product_id = $id;
        $cart->save();
        return redirect()->back()->with('message', 'Product Added to Cart.');
    }

    public function deletecart($id)
    {
        $data = cart::find($id);

        $data->delete();
        return redirect()->back();
    }


    public function incrementCart($id)
    {
        $data = cart::find($id);



        // Make sure you've got the Page model
        if ($data) {
            $data->quantity = $data->quantity + 1;
            $data->save();
        }
        return redirect()->back();
    }


    public function decrementCart($id)
    {
        $data = cart::find($id);



        // Make sure you've got the Page model
        if ($data) {
            if ($data->quantity > 1) {
                $data->quantity = $data->quantity - 1;
            } else {
                $data->quantity = $data->quantity;
            }
            $data->save();
        }
        return redirect()->back();
    }
}
