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

Route::get('/', 'StartController@index');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('action', 'ActionController', ['only' => ['store','edit','update','destroy']]);
	Route::resource('action_type', 'ActionTypeController');
});
Route::resource('action', 'ActionController', ['except' => ['store','edit','update','destroy']]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/{username}', 'ActionController@index');
