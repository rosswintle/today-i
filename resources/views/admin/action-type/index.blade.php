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
                            <a class="btn btn-default" href="{{ action('App\Http\Controllers\ActionTypeController@edit', ['action_type' => $actionType->id]) }}">Edit</a>
                            &nbsp;
                            <form style="display: inline-block;" action="{{ action('App\Http\Controllers\ActionTypeController@destroy', [ 'action_type' => $actionType->id ]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <input type="hidden" name="id" value="{{ $actionType->id }}">
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-default" href="{{ action('App\Http\Controllers\ActionTypeController@create') }}">Add</a>

    </div>
</section>
@endsection
