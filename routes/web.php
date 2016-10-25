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



Route::group(['middleware' => ['manualauth']], function () {

    $user = User::findOrfail(1);
    setcookie('user',$user->token);

    Route::get('/tasques', function () {
        return view('tasques');
    });
});


Route::get('/login', function () {
    return view('login');
});






//Route::get('/home', function () {
//    return view('home');
//});

//Auth::loginUsingId(4);
//
//
//Route::get('/login', 'LoginController@login');
//Route::get('/login', 'LoginController@showLoginForm');
//Route::post('/login', 'LoginController@postlogin');


//Route::get('/register', 'RegisterController@register');


//Route::get('/home', 'HomeController@home');


//
//Route::get('/register', function () {
//    return view('auth.register');
//});

