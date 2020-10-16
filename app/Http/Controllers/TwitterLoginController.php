<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;

class TwitterLoginController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function callback()
    {
        $twitterUser = Socialite::driver('twitter')->user();

        $user = User::where([
            'twitter_username' => $twitterUser->nickname,
        ])->first();

        if ($user) {
            Auth::login($user);

            return redirect()->action('App\Http\Controllers\MyProfileController@show');
        } else {
            return redirect()->action('App\Http\Controllers\SignupController@index');
        }
    }
}
