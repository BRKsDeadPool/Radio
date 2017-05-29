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

Route::group(['prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::get('login', [
            'middleware' => 'guest',
            'uses' => 'LoginController@showLoginForm',
            'as' => 'login'
        ]);
        Route::post('login', [
            'middleware' => 'guest',
            'uses' => 'LoginController@login'
        ]);
        Route::post('logout', [
            'middleware' => 'auth',
            'uses' => 'LoginController@logout',
            'as' => 'logout'
        ]);
    });

    Route::group(['namespace'=>'Admin'], function() {
        Route::get('/', [
            'uses' => 'AdminController@index',
            'as' => 'admin.home',
            'middleware' => 'auth'
        ]);
    });
});

Route::get('/', function () {
    return '<h1>Hello World</h1>';
});