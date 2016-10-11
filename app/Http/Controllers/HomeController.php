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
        if ($this->userIsAuthenticated()){
            $user = $this->getUser();
            return view('home')
                ->withUser($user);

    }else {
        return redirect('login');
        }
    }



    private function userIsAuthenticated(){

        if (isset ($_GET['user'])) {
            return true;
        }else{
            return false;
        }
    }

    private function getUser(){
        dd(Hash::make(1));
        $id = $_GET['user'];
        return User::findOrFail($id);

    }


}
