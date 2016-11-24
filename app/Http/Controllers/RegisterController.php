<?php

namespace App\Http\Controllers;

use App\ManualAuth\Guard;
use App\Http\Requests;
use App\ManualAuth\UserProviders\UserProvider;
use Illuminate\Http\Request;

/**
 * Class RegisterController
 * @package App\Http\Controllers
 */
class RegisterController extends Controller
{

    protected $userprovider;
    protected $guard;

    /**
     * RegisterController constructor.
     * @param UserProvider $userprovider
     * @param Guard $guard
     */
    public function __construct(UserProvider $userprovider, Guard $guard)
    {
        $this->guard = $guard;

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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request)
    {
        $this->validateRegister($request);
//        $credentials = $request->only(['name', 'email', 'password']);
//        $user = $this->userprovider->createUser($credentials);
//        $this->guard->setUser($user);
        $this->create($request);
        return redirect('home');
    }

    /**
     * @param $request
     */
    private function validateRegister($request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
    }

    /**
     * @param $request
     */
    private function create($request)
    {
        $credentials = $request->only('name','email','password');
        $this->userprovider->setUser($credentials);
        $this->guard->setUser($this->userprovider->getUserByCredentials($credentials));
    }


}
