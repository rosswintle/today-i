<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class FacebookLoginController extends Controller
{

    function redirectToProvider()
    {
    	return Socialite::driver('facebook')->redirect();
    }

    function callback()
    {
    	$fbUser = Socialite::driver('facebook')->user();
    	
    	$user = User::firstOrCreate(
    		[ 'email' => $fbUser->email, ],
    		[ 'name' => $fbUser->name,
    		  'username' => Str::snake( $fbUser->name ),
    		  'password' => Str::random(40),
    		 ]
    	);
    	
    	if ($user) {
    		Auth::login($user, true);
    		return redirect()->action('MyProfileController@show');
    	} else {
    		return redirect()->action('SignupController@index');
    	}
    }

}
