<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\user;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LoginController extends Controller
{
    /**
     * @return string
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request){
        try{
            $user = User::where(
                ["email"=> $request->input('email')])->firstOrFail();
        } catch (\Exception $e){
            return redirect ('login');
        }




        dd($user);

        if($user->password ==hash_make($request->input('password'))){
            return input ('home');


        }else{
            return input ('email');
        }
    }


}
