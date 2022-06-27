<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login-user');
    }
    public function register()
    {
        return view('register');
    }
    // In this function user is register
    public function saveUser(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('login');
    }
    public function getUser(Request $request){
        $request->validate([
            'email' =>'required',
            'password'=> 'required'
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        return redirect('/register');
    }
}
