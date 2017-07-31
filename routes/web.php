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
Route::post('/signup', 'SignupController@index');
// This is for testing really, but you could end up here somehow
Route::get('/signup', 'SignupController@index');

// Socialite routes
Route::get('/login/facebook', 'FacebookLoginController@redirectToProvider');
Route::get('/login/facebook/callback', 'FacebookLoginController@callback');
Route::get('/login/twitter', 'TwitterLoginController@redirectToProvider');
Route::get('/login/twitter/callback', 'TwitterLoginController@callback');

// Admin-only functions
Route::group(['middleware' => 'checkadmin'], function () {
	Route::resource('action-type', 'ActionTypeController');
	Route::resource('user', 'UserController', ['only' => ['index']]);
	Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/me', 'MyProfileController@show');
	Route::resource('action', 'ActionController', ['only' => ['store','edit','update','destroy']]);
	Route::resource('user', 'UserSettingsController', ['only' => ['edit','update','destroy']]);
});



Auth::routes();
