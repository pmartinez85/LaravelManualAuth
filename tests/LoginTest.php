<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Class LoginTest
 */
class LoginTest extends TestCase
{
    use DatabaseMigrations;

    public function testLoginPageShowsLoginForm()
    {
        $this->visit('/login')
            ->see('Email')
            ->see('Password');
    }

    /**
     * @return mixed
     */
    public function CreateTestUser()
    {
        return factory(\App\User::class,1)->create(['password'=> bcrypt('asdasd')]);
    }

    public function testLoginPostWithUserOk()
    {
        $user = $this->createTestUser();
        $this->visit('/login')
            ->type($user->name, 'email')
            ->type('asdasd', 'password')
            ->press('Login')
            ->seePageIs('/home');
    }

    public function testLoginPostWithUserNotOk()
    {
        $this->visit('/login')
            ->type('adadad@fasd.com', 'email')
            ->type('asdasd', 'password')
            //->check('terms')
            ->press('Login')
            ->seePageIs('/login');
    }
}
