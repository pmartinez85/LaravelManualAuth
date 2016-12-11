<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

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

    private function setUserCookie(){
        $user= User::findOrFail(1);
        setcookie('user',$user->token);
    }

    /**
     * @return mixed
     */
    private function getuser()
    {
        //Opció 1 : query string $_GET
        $token = $_COOKIE['user'];

        return User::where(["token" => $token])->first();
    }
}
