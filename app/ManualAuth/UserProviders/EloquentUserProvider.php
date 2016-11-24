<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 8/11/16
 * Time: 20:20.
 */
namespace App\ManualAuth\UserProviders;

use App\User;
use Hash;

class EloquentUserProvider implements UserProvider
{
    public function validate(array $credentials)
    {
        $user = $this->getUserByCredentials($credentials);

        if (!$user) {
            return false;
        }

        //SALTS
        if (Hash::check($credentials['password'], $user->password)) {
            return true;
        }else{
            return false;
        }
    }

    public function getUserByCredentials(array $credentials)
    {
        try {
            return User::where(
                ['email' => $credentials['email']])->firstOrFail();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function createUser(array $credentials)
    {
        return User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'remember_token' => str_random(10),
            'token' => bcrypt(str_random(10))
        ]);
    }
}
