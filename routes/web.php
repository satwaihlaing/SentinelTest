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
    return view('test');
});

Route::get('activate/{email}/{activationCode}','ActivationController@activate');
Route::get('/forgot-password','ForgotPasswordController@index');
Route::post('/forgot-password','ForgotPasswordController@forgotPassword');
Route::get('reset/{email}/{activationCode}','ForgotPasswordController@reset');
Route::post('reset/{email}/{activationCode}','ForgotPasswordController@postreset');

Route::get('/register','RegisterController@index');
Route::post('/register','RegisterController@store');

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');
Route::post('/logout','LoginController@logout');
Route::get('/logout', function () {
    return redirect('/login');
});
