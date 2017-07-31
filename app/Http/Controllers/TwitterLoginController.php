<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class TwitterLoginController extends Controller
{
    
    function redirectToProvider() {
    	return Socialite::driver('twitter')->redirect();
    }

    function callback() {
    	$user = Socialite::driver('twitter')->user();
    	dd($user);
    }

}
