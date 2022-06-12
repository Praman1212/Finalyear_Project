<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registers;

class ProductController extends Controller
{
    public function index(){
        return view('index');
    }
    public function login(){
        return view('login');
    }
    public function saveUser(Request $request){
        $user = new Registers;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('login');
        // return $request->input();

    }
    public function product_details(){
        return view('product-details');
    }
    public function checkout(){
        return view('checkout');
    }
}
