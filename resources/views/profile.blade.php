@extends('layouts.frontend')

@section('title', 'Profile')

@section('content')

	<h1 class="title">
		Today I...
	</h1>

    <div id="types">
        @foreach ($types as $type)
            <button data-type-id="{{ $type->id }}">{{ $type->name }}</button>
        @endforeach 
    </div>

    <form id="action-form" method="POST" action="{{ action('ActionController@store') }}">
        {{ csrf_field() }}
        <input id="typeInput" type="hidden" name="type" value="1">
        <input type="text" name="text" placeholder="thing that you did...">
        <input type="submit" name="submit" value="Boom!">
    </form>

    <hr>

	<ul class="action-list">
	@foreach ($actions as $action)
		<li class="action">
			On {{ $action->created_at->format('jS F Y') }} you <strong>{{ $action->type->name }}</strong>
			{{ $action->text }}
		</li>
    @endforeach
    </ul>


@endsection