<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class HomeController extends Controller
{
    public function __construct(){

        //$this->middleware('auth');
}

    public function home()
    {
      //  $user = Auth::user();
            //ESTAT SESSIO
        $user = $this->getUser();
        return view('home')
            ->withUser($user);

    }

    private function getUser(){

        //Opcio 1 : Query string $_GET
        return $_GET['user'];
    }


}
