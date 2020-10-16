<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StartController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\FacebookLoginController;
use App\Http\Controllers\TwitterLoginController;
use App\Http\Controllers\ActionTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\UserSettingsController;


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

Route::get('/', [StartController::class, 'index']);

// This covers the case of needing to log in or register to post
Route::post('/signup', [SignupController::class, 'index']);
// This is for testing really, but you could end up here somehow
Route::get('/signup', [SignupController::class, 'index']);

// Socialite routes
Route::get('/login/facebook', [FacebookLoginController::class, 'redirectToProvider']);
Route::get('/login/facebook/callback', [FacebookLoginController::class, 'callback']);
Route::get('/login/twitter', [TwitterLoginController::class, 'redirectToProvider']);
Route::get('/login/twitter/callback', [TwitterLoginController::class, 'callback']);

// Admin-only functions
Route::group(['middleware' => 'checkadmin'], function () {
    Route::resource('action-type', ActionTypeController::class);
    Route::resource('user', UserController::class, ['only' => ['index']]);
    Route::get('/home', [HomeController::class, 'index']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/me', [MyProfileController::class, 'show']);
    Route::resource('action', ActionController::class, ['only' => ['store', 'edit', 'update', 'destroy']]);
    Route::resource('user', UserSettingsController::class, ['only' => ['edit', 'update', 'destroy']]);
});

Auth::routes();
