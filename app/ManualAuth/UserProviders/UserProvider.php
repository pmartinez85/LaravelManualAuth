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
<<<<<<< HEAD


    /**
     * @param array $credentials
     * @return mixed
     */
    public function validate(array $credentials);

    /**
     * @param array $credentials
     * @return mixed
     */
    public function getUserByCredentials(array $credentials);

    /**
     * @param $credentials
     * @return mixed
     */
    public function createUser(array $credentials);

=======
    public function validate(array $credentials);
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383

    public function getUserByCredentials(array $credentials);
}
