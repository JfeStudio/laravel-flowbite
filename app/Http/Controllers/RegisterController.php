<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'username' => ['required', 'min:3', 'alpha_num', 'unique:users', 'max:25'],
            'name' => ['required', 'min:3', 'string',],
            'email' => ['required', 'min:3', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/')->with('success', 'Registered was succesfully');
    }
}