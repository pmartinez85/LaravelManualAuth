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

/**
 * Class EloquentUserProvider
 * @package App\ManualAuth\UserProviders
 */
class EloquentUserProvider implements UserProvider
{
<<<<<<< HEAD

    /**
     * @param array $credentials
     * @return bool
     */
=======
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
    public function validate(array $credentials)
    {
        $user = $this->getUserByCredentials($credentials);

        if (!$user) {
            return false;
        }

        //SALTS
<<<<<<< HEAD
        if (Hash::check($credentials['password'], $user->password))
        {return true;
        } else {return false;}
    }

    /**
     * @param array $credentials
     * @return bool
     */
=======
        if (Hash::check($credentials['password'], $user->password)) {
            return true;
        }

        return false;
    }

>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
    public function getUserByCredentials(array $credentials)
    {
        try {
            return User::where(
                ['email' => $credentials['email']])->firstOrFail();
        } catch (\Exception $e) {
            return false;
        }
    }
<<<<<<< HEAD

    /**
     * @param array $credentials
     * @return EloquentUserProvider|User
     */
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
=======
}
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
