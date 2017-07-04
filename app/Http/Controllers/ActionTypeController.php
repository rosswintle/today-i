<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActionType;

class ActionTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actionTypes = ActionType::all();
        return view('admin.action-type.index', [
            'actionTypes' => $actionTypes,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.action-type.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actionType = ActionType::create([
            'name' => $request->name,
            'icon_class' => $request->icon_class,
        ]);

        return redirect()->action('ActionTypeController@index');

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
        $actionType = ActionType::findOrFail($id);
        return view('admin.action-type.edit', [ 'actionType' => $actionType ]);
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
        $actionType = ActionType::findOrFail($id);
        $actionType->fill([
                'name' => $request->name,
                'icon_class' => $request->icon_class,
            ]);
        $actionType->save();
        return redirect()->action('ActionTypeController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ActionType::destroy($id);
        return redirect()->action('ActionTypeController@index');
    }
}
