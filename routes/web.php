<?php

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

Route::get('/', "HomeController@ShowHome");

Route::get('/home', "HomeController@ShowHome");

Route::get('/register',"AuthController@ShowRegister");

Route::post('/welcome',"AuthController@PostRegister");
