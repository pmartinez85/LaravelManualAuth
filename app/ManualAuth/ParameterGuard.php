<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 25/10/16
 * Time: 20:02
 */

namespace App\ManualAuth;


use Illuminate\Http\Request;

class ParameterGuard implements Guard
{

    /**
     * ManualByIdParameter constructor.
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function check()
    {
        if ($this->request->has('id')){
            return true;

        }
        return false;
    }
}