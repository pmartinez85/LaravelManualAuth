<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 25/10/16
 * Time: 20:33.
 */
namespace App\ManualAuth;

<<<<<<< HEAD

/**
 * Interface Guard
 * @package App\ManualAuth
 */
=======
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
interface Guard
{
    public function check();

    /**
     * @param array $credentials
     * @return mixed
     */
    public function validate(array $credentials);

    /**
     * @param $user
     * @return mixed
     */
    public function setUser($user);
}
