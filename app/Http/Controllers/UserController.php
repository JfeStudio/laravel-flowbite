<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index(){
        return view('auth.index', [
            'users' => User::orderBy('id', 'DESC')->get(),
        ]);
    }
}