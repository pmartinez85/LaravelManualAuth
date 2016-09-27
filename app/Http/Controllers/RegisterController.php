<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
}