<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('type') && $request->has('text')) {
            $request->session()->put('posted_action_data', $request->all());
        }

        return view('signup');
    }
}
