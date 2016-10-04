<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class HomeController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
}

    public function home()
    {
        $user = Auth::user();
        return view('home')
            ->withUser($user);

    }
}
