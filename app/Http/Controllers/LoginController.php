<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
     public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            // 'username' => ['required', 'min:3', 'alpha_num', 'unique:users', 'max:25'],
            // 'name' => ['required', 'min:3', 'string',],
            'email' => ['required', 'min:3', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        // $credentials = ['email' => $request->email, 'password' => $request->password];
        // dd($credentials);
        if(Auth::attempt($credentials)){
            //   $request->session()->regenerate();
            return redirect('/')->with('success', 'You are now logged in');
        };

        // throw ValidationException::withMessages([
        //     'email' => 'Wrong Email'
        // ]);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}