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

// This covers the case of needing to log in or register to post
// This must come before the Auth-protected routes
Route::post('/signup', 'SignupController@index');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/me', 'MyProfileController@show');
	Route::resource('action', 'ActionController', ['only' => ['store','edit','update','destroy']]);
});


// Admin-only functions
Route::group(['middleware' => 'auth'], function () {
	Route::resource('action_type', 'ActionTypeController');
});

Auth::routes();

// Should get rid of this really
Route::get('/home', 'HomeController@index');