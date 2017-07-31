<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class FacebookLoginController extends Controller
{
    
    function redirectToProvider() {
    	return Socialite::driver('facebook')->redirect();
    }

    function callback() {
    	$user = Socialite::driver('facebook')->user();
    	
    	$user = User::where([
    		'email' => $user->email,
    		])->first();
    	
    	if ($user) {
    		Auth::login($user, true);
    		return redirect()->action('MyProfileController@show');
    	} else {
    		return redirect()->action('SignupController@index');
    	}
    }

}
