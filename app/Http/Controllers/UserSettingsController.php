<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSettingsController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (! (Auth::user()->isAdmin() || Auth::id() == $user->id)) {
            abort(403, 'Oi! You can\'t do that!');
        }

        return view('user-settings.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (! (Auth::user()->isAdmin() || Auth::id() == $user->id)) {
            abort(403, 'Oi! You can\'t do that!');
        }

        $user->fill([
            'name' => $request->name,
            'email_hour' => $request->email_hour,
            'email_off' => $request->email_off ? date('Y-m-d') : null,
            'twitter_username' => $request->twitter_username,
            ]);
        $user->save();
        $request->session()->flash('success_alert', 'Settings updated');

        return redirect()->action('App\Http\Controllers\UserSettingsController@edit', ['user' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return "You can't do this just yet - sorry!";
    }
}
