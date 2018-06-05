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

Route::get('/', function () {
    return view('welcome');
});
Route::get('aaaa', function () {
   return view('file1');
});
Route::get('ooo', function (){
    return "aaaa";
});
Route::view('bbb', 'file1', ['name' => "mmm"] );

Route::get('/user/{id}', function ($id){
    return $id;
});
Route::get('/id/{id}/name/{name}', function ($id, $name){
    echo "$id+$name";
});
Route::get('/app', function (){
    return view('layouts/app');
});
Route::get('/child', function (){
    return view('layouts/child');
});
Route::get('/nhan/', function (){
   return view('nhan');
});