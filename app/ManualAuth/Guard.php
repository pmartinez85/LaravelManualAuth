<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 25/10/16
 * Time: 20:33
 */

namespace App\ManualAuth;


interface Guard
{

    public function check();

    public function validate(array $credentials){

        return $this->provider->validate($credentials);
    }

    public function setUser($user){

        //TODO: implement setUser() Method.
    }

}