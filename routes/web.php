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

Auth::routes();

Route::group(['prefix' => 'user'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('user.dashboard');
    Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', 'Auth\AdminLoginController@showAdminLogin')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@adminLogin')->name('admin.login.submit');
    Route::get('/dashboard', 'HomeAdminController@index')->name('admin.dashboard');
    Route::post('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
});
