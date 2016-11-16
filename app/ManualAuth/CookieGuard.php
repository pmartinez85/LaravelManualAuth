<?php

namespace App\ManualAuth;

use App\ManualAuth\UserProviders\UserProvider;

<<<<<<< HEAD
/**
 * Class CookieGuard
 * @package App\ManualAuth
 */
=======
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
class CookieGuard implements Guard
{
    protected $provider;

    /**
     * CookieGuard constructor.
     *
     * @param $provider
     */
    public function __construct(UserProvider $provider)
    {
        $this->provider = $provider;
    }

<<<<<<< HEAD
    /**
     * @return bool
     */
=======
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
    public function check()
    {
        return isset($_COOKIE['user']) ? true : false;
    }

<<<<<<< HEAD
    /**
     * @param array $credentials
     * @return mixed
     */
=======
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
    public function validate(array $credentials)
    {
        return $this->provider->validate($credentials);
    }

<<<<<<< HEAD

    /**
     * @param $user
     */
=======
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
    public function setUser($user)
    {
        setcookie('user', $user->token);
    }
}
