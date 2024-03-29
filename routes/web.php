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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/admin', function(){
    return view('admin.index');
});

Route::get('/admin/login', function(){
    return view('admin.login');
});

Route::get('/admin/register', function(){
    return view('admin.register');
});

Route::get('/admin/forgot', function(){
    return view('admin.forgot-password');
});

Route::match(['get','post'],'/admin/login','AdminController@login');

