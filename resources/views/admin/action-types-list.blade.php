@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="container">

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
                        <td>{{ $actionType->icon_class }}</td>
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
</section>
@endsection
