<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\User;

Route::get('/', function () {
    return view('welcome');
});


//PAS 1 Middleware. com protegir pàgines?


//Container

//
//$this->app->bind(
//    \App\ManualAuth\Guard::class, \App\ManualAuth\ParameterGuard::class
//);
//
$this->app->bind(
    \App\ManualAuth\Guard::class, \App\ManualAuth\CookieGuard::class
);

//    $user = User::findOrfail(1);
//    setcookie('user',$user->token);




Route::group(['middleware' => ['manualauth']], function () {


    Route::get('/tasques', function () {
        return view('tasques');
    });
});


Route::get('/login', function () {
    return view('login');
});
