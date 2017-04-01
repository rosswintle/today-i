@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Icon name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($actionTypes as $actionType)
                                <tr>
                                    <td>{{ $actionType->id }}</td>
                                    <td>{{ $actionType->name }}</td>
                                    <td>Coming soon!</td>
                                    <td>
                                        <a href="{{ action('ActionTypeController@edit', ['id' => $actionType->id]) }}">Edit</a>
                                        | <a href="{{ action('ActionTypeController@destroy', ['id' => $actionType->id]) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach                
                        </tbody>
                    </table>
                    <a href="{{ action('ActionTypeController@create') }}">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
