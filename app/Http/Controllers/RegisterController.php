<?php

namespace App\Http\Controllers;


use App\ManualAuth\UserProviders\UserProvider;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class RegisterController
 * @package App\Http\Controllers
 */

class RegisterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    protected $userprovider;

    /**
     * RegisterController constructor.
     * @param UserProvider $userprovider
     */
    public function __construct(UserProvider $userprovider)
    {
        $this->userprovider = $userprovider;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }


    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $this->validateRegister($request);
        $credentials = $request->only(['name','email','password']);
        $this->userprovider->createUser($credentials);
    }

    /**
     * @param $request
     */
    private function validateRegister($request)
    {
        $this->validate($request,[
            'nom'=> 'required', 'email' => 'email|required', 'password' => 'required|confirmed',
        ]);
    }
}

