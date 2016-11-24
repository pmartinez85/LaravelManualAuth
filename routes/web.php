<?php

use App\User;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['manualauth']], function () {
    Route::get('/tasques', function () {
        return view('tasques');
    });
    Route::get('/home', function () {
        return "Estem a casa";
    });
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/login', 'LoginController@showLoginForm');
Route::post('/login', 'LoginController@login');
Route::get('/register', 'RegisterController@showRegisterForm');
Route::post('/register', 'RegisterController@register');
Route::get('/logout', 'LoginController@logout');