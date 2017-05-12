<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    
	public function index( Request $request )
	{
		
		$request->session()->put('posted_action_data', $request->all() );
		$request->session()->save();

		return view( 'signup' );

	}

}
