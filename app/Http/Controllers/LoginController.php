<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



class LoginController extends Controller
{
    /**
     * @return string
     */
    public function login()
    {
        return view('auth.login');
    }
}
