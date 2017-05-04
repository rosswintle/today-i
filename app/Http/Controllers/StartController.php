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

        $user = Auth::user();

    	if ($user) {
    		
    		$userActions = Action::with('type')
    			->where('user_id', $user->id)
    			->latest()
    			->paginate(10);

    		return view('my-profile', [
                'user' => $user,
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
