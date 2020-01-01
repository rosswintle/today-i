<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        if (! User::USER_TYPE_ADMIN == $user->user_type) {
            abort('404', 'You need to be an admin');
        }

        return $next($request);
    }
}
