<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * @param array $middleware
     */
    public function home()
    {
       // $data = ['username' => 'nommm'];
       // return view('home', $data);
        return view('home') ->with  ('username', 'amparo');
    }
}
