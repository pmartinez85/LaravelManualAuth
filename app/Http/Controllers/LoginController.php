<?php

namespace App\Http\Controllers;

use App\ManualAuth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\user;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LoginController extends Controller
{
    /**
     * LoginController constructor.
     */
    protected $guard;

    public function __construct(Guard $guard)
    {
    }

    /**
     * @return string
     */


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request){

        $this->validateLogin($request);
        $credentials = $request->only(['email', 'password']);
        if($this->guard->validate($credentials)){

            //Ok TODO
            $this->guard->setUser();
            return redirect('home');
        }
        return redirect('login');

        //Validate login form ->Required fields, response with errors, etc

        //Check too many attemps TODO

        //Delegar intent de autenticació a aulgu altre i tenir en compte
        //que poden haber diferents users providers, LDAP, SQL, AD
        //Bifuquem codi...Ok o no Ok
        //Ok -->  CookieGuard o ParameterGuard o que??
        //Not OK-->Login with errors


    }

    private function validateLogin()
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required',
        ]);

    }



//
//    public function login(Request $request){
//        try{
//            $user = User::where(
//                ["email"=> $request->input('email')])->firstOrFail();
//        } catch (\Exception $e){
//            return redirect ('login');
//        }
//

//
//
//        dd($user);
//
//        if($user->password ==hash_make($request->input('password'))){
//            return input ('home');
//
//
//        }else{
//            return input ('email');
//        }
//    }
//
//
}
