<?php

namespace App\ManualAuth\UserProviders;

/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 8/11/16
 * Time: 20:13.
 */
interface UserProvider
{
    /**
     * @param array $credentials
     *
     * @return mixed
     */
    public function validate(array $credentials);

    /**
     * @param array $credentials
     *
     * @return mixed
     */
    public function getUserByCredentials(array $credentials);

    /**
     * @param array $credentials
     *
     * @return mixed
     */
    public function setUser(array $credentials);
}
