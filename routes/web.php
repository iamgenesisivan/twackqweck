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

// Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', array('uses' => 'MainController@home', 'as' => 'home'));
Route::get('/dashboard', array('uses' => 'MainController@dashboard', 'as' => 'dashboard'));
Route::get('/reports', array('uses' => 'MainController@reports', 'as' => 'reports'));


Route::get('/login', array('uses' => 'LoginController@login', 'as' => 'login'));