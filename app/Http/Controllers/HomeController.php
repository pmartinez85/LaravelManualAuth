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
            $this->setUserCokkie();
            //ESTAT SESSIO
        if ($this->userIsAuthenticated()){
            $user = $this->getUser();
            return view('home')
                ->withUser($user);

    }else {
        return redirect('login');
        }

    }



    private function userIsAuthenticated(){

        if (isset ($_COOKIE['user'])) {
            return true;
        }else{
            return false;
        }
    }
    private function setUserCokkie(){

        $user = User::find(1);
        setcookie('user',json_encode($user));  //primera cookie creada
    }

    private function getUser(){
        $user = json_decode($_COOKIE['user']);
        return $user;
    }



}
