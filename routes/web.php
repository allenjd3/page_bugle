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

Route::get('/', function () {
    return view('adminthemes.adminlte.index');
});

Route::get('/home', function () {
    return view('adminthemes.adminlte.default');
});

Route::group(['prefix'=>'admin'], function(){
	// Authentication Routes...
        Route::get('login', function(){
        	return view('adminthemes.adminlte.login');
        })->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', function(){
        	return view('adminthemes.adminlte.register');
        })->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
        Route::get('/home', 'AdminController@index');
});