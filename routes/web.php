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
  if (Auth::check()) {
    return view("user.home");
  } 

  return view("index");
})->name("home");

Route::get('/login', "LoginController@index");
Route::post('/login', "LoginController@store");
Route::get('/register', "RegisterController@index");
Route::post('/register', "RegisterController@store");
Route::get('/logout', "LoginController@destroy");
