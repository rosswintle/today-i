<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class TwitterLoginController extends Controller
{
    
    function redirectToProvider() {
    	return Socialite::driver('twitter')->redirect();
    }

    function callback() {
    	$twitterUser = Socialite::driver('twitter')->user();
    	
    	$user = User::where([
    		'twitter_username' => $twitterUser->nickname
    	])->first();

    	if ($user) {
    		Auth::login($user);
    		return redirect()->action('MyProfileController@show');
    	} else {
    		return redirect()->action('SignupController@index');
    	}
    }

}
