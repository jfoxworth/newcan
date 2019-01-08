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
    return view('layouts.welcome');
});


Route::get('/Issues', function () {
    return view('layouts.issues');
});


Route::get('/JoinUs', function () {
    return view('layouts.register');
});


Route::get('/Register', function () {
    return view('layouts.register');
});


Route::post('/JoinUs', 'Auth\RegisterController@create');
