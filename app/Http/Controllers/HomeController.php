<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class HomeController extends Controller
{
    public function __construct(){


}

    public function home()
    {
            $this->setUserCookie();
            //ESTAT SESSIO
        if ($this->userIsAuthenticated()){
            $user = $this->getUser();
            return view('home')
                ->withUser($user);

    }else{return redirect('login');}

    }


    private function setUserCookie(){

        $user = User::findOrfail(1);
        setcookie('user',$user->token);
    }

    private function getUser(){

        $token= $_COOKIE['user'];
        return User::where(["token" => $token])->first();
        }

    private function userIsAuthenticated(){return isset ($_COOKIE['user']) ? true : false ;}


}
