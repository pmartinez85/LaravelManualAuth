<?php

namespace App\Http\Controllers;

use App\Http\Requests;


class HomeController extends Controller
{

    public function home()
    {
       // $data = ['username' => 'nommm'];
       // return view('home', $data);
        return view('home')->with  ('username', 'amparo');
    }
}
