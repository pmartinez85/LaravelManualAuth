<?php

namespace App\Http\Controllers;

use App\User;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        return view('home');
    }


    /**
     * @return mixed
     */

    private function getUser()
    {
        $token = $_COOKIE['user'];

        return User::where(['token' => $token])->first();
    }
}
