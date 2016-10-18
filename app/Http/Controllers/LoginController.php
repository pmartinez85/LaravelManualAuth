<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class LoginController extends Controller
{
    /**
     * @return string
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(){

 
        echo "login aquiiii";
    }


}
