@extends('layouts.frontend')

@section('title', 'Profile')

@section('content')

        <section class="section">
            <div class="container content has-text-centered">

                <h1 class="title">
                    {{ $user->name }}
                </h1>

            </div>
        </section>

        <hr>

        @component( 'components/action-list', [ 'actions' => $actions ] )
        @endcomponent

@endsection