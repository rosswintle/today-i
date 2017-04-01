@extends('layouts.frontend')

@section('title', 'Profile')

@section('content')

        <section class="section">
            <div class="container content has-text-centered">
                <h1 class="title">
                    Today I...
                </h1>

                <div id="types">
                    @foreach ($types as $type)
                        <button data-type-id="{{ $type->id }}" class="button is-info is-large">
                            <span class="icon">
                                <i class="fa {{ $type->icon_class }}"></i>
                            </span>
                            <span>
                                {{ $type->name }}
                            </span>
                        </button>
                    @endforeach 
                </div>

                <form id="action-form" method="POST" action="{{ action('ActionController@store') }}">
                    {{ csrf_field() }}
                    <input id="typeInput" type="hidden" name="type" value="1">
                    <p>
                        <input class="input is-large" type="text" name="text" placeholder="thing that you did...">
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Boom!" class="button is-primary is-large">
                    </p>
                </form>

            </div>
        </div>
    </section>

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