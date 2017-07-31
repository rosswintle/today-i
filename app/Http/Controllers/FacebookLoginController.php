<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class FacebookLoginController extends Controller
{
    
    function redirectToProvider() {
    	return Socialite::driver('facebook')->redirect();
    }

    function callback() {
    	$user = Socialite::driver('facebook')->user();
    	dd($user);
    }

}
