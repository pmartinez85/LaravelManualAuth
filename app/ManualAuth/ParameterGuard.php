<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 25/10/16
 * Time: 20:02.
 */

namespace App\ManualAuth;

use Illuminate\Http\Request;

/**
 * Class ParameterGuard.
 */
class ParameterGuard implements Guard
{
    /**
     * ManualByIdParameter constructor.
     */
    protected $request;

    /**
     * ParameterGuard constructor.
     *
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function check()
    {
        if ($this->request->has('id')) {
            return true;
        }

        return false;
    }

    /**
     * @param array $credentials
     *
     * @return bool
     */
    public function validate(array $credentials)
    {
        return true;
    }

    /**
     * @param $user
     */
    public function setUser($user)
    {
        // TODO: Implement setUser() method.
    }
}
