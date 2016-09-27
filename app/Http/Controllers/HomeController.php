<?php

namespace App\Http\Controllers;

use App\User;


class HomeController extends Controller
{

    public function home()
    {
       // $data = ['username' => 'nommm'];
       // return view('home', $data);

        $user =User::find(1);
        return view('auth.home')
            ->withuser ($user);
    }
}
