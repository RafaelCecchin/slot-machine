<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::post('/login', 'auth\LoginController@validateLogin');

Route::get('/login', 'auth\LoginController@index')->name('login');

Route::get('/register', 'auth\RegisterController@index')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return redirect()->route('home');
});

