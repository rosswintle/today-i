@extends('layouts.frontend')

@section('title', 'Login')

@section('content')

<section class="section">
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
                <h2 class="title">Login</h2>

                <p>
                    <a href="{{ action('FacebookLoginController@redirectToProvider') }}">Sign up or log in 	with Facebook</a>
                </p>

                @component('components/login-form')
                @endcomponent
            </div>
        </div>
    </div>
</section>

@endsection
