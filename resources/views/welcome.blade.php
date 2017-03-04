@extends('layouts.frontend')

@section('title', 'Home')

@section('content')

        <div class="flex-center position-ref full-height">

            <div class="content">
                <h1 class="title m-b-md">
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

            </div>
        </div>

@endsection('body')