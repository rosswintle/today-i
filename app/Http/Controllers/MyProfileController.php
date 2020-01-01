<?php

namespace App\Http\Controllers;

use App\Action;
use App\ActionType;
use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{
    public function show(Request $request, ActionController $actionController)
    {

        // If we came here with stored action data, store it
        if ($request->session()->has('posted_action_data')) {
            return $actionController->store($request);
        }

        $user = Auth::user();

        $types = ActionType::all();

        $userActions = Action::with('type')
            ->where('user_id', $user->id)
            ->orderBy('action_time', 'DESC')
            ->paginate(10);

        return view('my-profile', [
            'user' => $user,
            'types' => $types,
            'actions' => $userActions,
        ]);
    }
}
