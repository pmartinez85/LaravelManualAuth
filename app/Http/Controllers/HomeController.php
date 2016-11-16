<?php

namespace App\Http\Controllers;

use App\User;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
<<<<<<< HEAD

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
=======
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
    public function index()
    {
        return view('home');
    }

<<<<<<< HEAD
    /**
     * @return mixed
     */
=======
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
    private function getUser()
    {
        //Opció 1 : query string $_GET
        $token = $_COOKIE['user'];

        return User::where(['token' => $token])->first();
    }
}
