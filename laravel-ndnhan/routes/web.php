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

Route::get('/', 'UserController@showTable');

Route::get('/name', 'UserController@show');

Route::get('/blog', 'UserController@blog');

Route::get('/user/{id}', 'UserController@getUser');