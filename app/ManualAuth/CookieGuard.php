<?php

namespace App\ManualAuth;

use App\ManualAuth\UserProviders\UserProvider;

/**
 * Class CookieGuard
 * @package App\ManualAuth
 */
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

    /**
     * @return bool
     */
    public function check()
    {
        return isset($_COOKIE['user']) ? true : false;
    }

    /**
     * @param array $credentials
     * @return mixed
     */
    public function validate(array $credentials)
    {
        return $this->provider->validate($credentials);
    }

    /**
     * @param $user
     */
    public function setUser($user)
    {
        setcookie('user', $user->token);
    }
}
