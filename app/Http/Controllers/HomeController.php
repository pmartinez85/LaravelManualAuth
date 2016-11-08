<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }
    private function getUser()
    {
        //Opció 1 : query string $_GET
        $token = $_COOKIE['user'];
        return User::where(["token" => $token])->first();
    }


}
