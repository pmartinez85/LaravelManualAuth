<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class HomeController extends Controller
{
    public function __construct(){

        $this-> $this->middleware('auth');
}

    public function home()
    {
        $user = User::find(1);
        return view('home')
            ->withUser($user);

    }
}
