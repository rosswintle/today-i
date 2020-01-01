<?php

namespace App\Http\Controllers;

use App\Action;
use App\ActionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function index()
    {
        $types = ActionType::all();

        return view('welcome', [
            'types' => $types,
            ]);
    }
}
