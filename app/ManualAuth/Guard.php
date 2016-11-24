<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 25/10/16
 * Time: 20:33.
 */
namespace App\ManualAuth;

/**
 * Interface Guard
 * @package App\ManualAuth
 */
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
