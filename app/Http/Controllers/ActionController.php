<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\User;
use App\ActionType;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $username = null )
    {
        $authenticatedUser = Auth::user();

        if ( $username ) {
            $user = User::where( 'username', $username )->firstOrFail();
            $my_profile = false;
            if ( $authenticatedUser && $authenticatedUser->ID == $user->ID ) {
                $my_profile = true;
            }
        } else {
            if (is_null($authenticatedUser)) {
                abort( 404, "User not found" );
            } else {
                $my_profile = true;
            }
        }

        $types = ActionType::all();

        $userActions = Action::with('type')
            ->where('user_id', $user->id)
            ->latest()
            ->paginate(10);

        if ( $my_profile ) {
            return view('my-profile', [
                'user' => $user,
                'types' => $types,
                'actions' => $userActions,
            ]);
        } else {
            return view('profile', [
                'user' => $user,
                'actions' => $userActions,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user=Auth::user();

        if ( $request->session()->has('posted_action_data') ) {
            $actionData = $request->session()->get('posted_action_data');
            $request->session()->forget('posted_action_data');
        } else {
            $actionData = $request->all();
        }

        $request->session()->flash('success_alert', 'Yay! Great work. Every creative, thoughtful action makes a difference.');

        $action = new Action;
        $action->action_type_id = $actionData['type'];
        $action->text = $actionData['text'];
        $action->user_id = $user->id;

        $action_time = Carbon::now();
        if ($request->input( 'action-date' ) == 'yesterday' ) {
            $action_time = $action_time->subDay();
        }
        $action->action_time = $action_time->toDateTimeString();

        $action->save();
        
        return redirect('/me');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
