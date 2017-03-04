<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ActionType;
use App\Action;

class StartController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	//
    }

    public function index() {

    	$types = ActionType::all();

    	if (Auth::check()) {
    		
    		$userActions = Action::with('type')
    			->where('user_id', Auth::id())
    			->latest()
    			->paginate(10);

    		return view('profile', [
    			'types' => $types,
    			'actions' => $userActions,
    		]);
    	
    	} 
    	else 
    	{

    		return view('welcome', [
    			'types' => $types,
    			]);
		}

    }

}
