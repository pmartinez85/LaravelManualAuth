<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\ManualAuth\UserProviders\UserProvider;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class RegisterController
 * @package App\Http\Controllers
 */
=======
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
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
<<<<<<< HEAD

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
=======
}
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
