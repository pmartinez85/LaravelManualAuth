<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
  use DatabaseMigrations;
    public function testLoginPageShowsLoginForm()
    {
        $this->visit('/login')
            ->see('Usuari')
            ->see('Password');
    }

    public function CreateTestUser()
    {
        return factory(App\User::class,1)->create(['password'=> Hash::make('asdasd')]);
    }
    public function testLoginPostWithUserOk()
    {
        $user = $this->createrestUser();
        $this->visit('/login')
            ->type($user->email, 'email')
            ->type('asdasd', 'password')
            ->press('login')
            ->seePageIs('/home');
    }
    public function testLoginPostWithUserNotOk()
    {

        $this->visit('/login')
            ->type('adadad@fasd.com', 'email')
            ->type('asdasd', 'password')
            //->check('terms')
            ->press('login')
            ->seePageIs('Username not exist');
    }
}