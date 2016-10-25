<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 25/10/16
 * Time: 20:02
 */

namespace App\ManualAuth;


class CookieGuard implements Guard
{

    public function check()
    {
        return isset ($_COOKIE['user']) ? true : false ;
    }
}