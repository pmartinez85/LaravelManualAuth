<?php

namespace App\Http\Controllers;

use App\ManualAuth\Guard;
use App\Http\Requests;
use App\ManualAuth\UserProviders\UserProvider;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    protected $userprovider;
    protected $guard;

    public function __construct(UserProvider $userprovider, Guard $guard)
    {
        $this->guard = $guard;

        $this->userprovider = $userprovider;
    }

    public function register(Request $request)
    {
        $this->validateRegister($request);
        $credentials = $request->only(['name', 'email', 'password']);
        $user = $this->userprovider->createUser($credentials);
        $this->guard->setUser($user);
        return redirect('home');
    }

    private function validateRegister($request)
    {
        $this->validate($request,[
            'name'=> 'required', 'email' => 'email|required|unique:users', 'password' => 'required|confirmed',
        ]);
    }


}
