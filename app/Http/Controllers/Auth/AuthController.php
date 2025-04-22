<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function password_reset(Request $request)
    {
        return view('auth.forgot-password');
    }

    public function new_password(Request $request)
    {
        return view('auth.reset-password');
    }

}
