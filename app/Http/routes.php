<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','UserController@index0');
Route::get('/typography','UserController@index1');
Route::get('/helper-class','UserController@index2');
Route::get('/alert','UserController@index3');
Route::get('/animation','UserController@index4');
Route::get('/basic','UserController@index5');
Route::get('/colored','UserController@index6');