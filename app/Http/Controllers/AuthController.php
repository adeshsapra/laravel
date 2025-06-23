<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboardPage()
    {
        return view('welcome');
    }

    public function showLoginForm()
    {
        return view('login'); // or 'auth.login' if stored in auth folder
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email', 
            'password'=>'required'
        ]);
          
        if($credentials){
            
        }
    }

    public function showRegisterForm()
    {
        return view('register'); // or 'auth.register' if stored in auth folder
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name'=>'required', 
            'email'=>'required|email', 
            'password'=>'required|confirmed'
        ]);

        $user = Auth::create($data);

        if($user){
            return view('login');
        }
    }


}
