<?php

namespace App\Http\Controllers;

use App\Models\auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    // In this function user is register
    public function saveUser(Request $request)
    {
        $user = new auth;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('login');
    }
}
