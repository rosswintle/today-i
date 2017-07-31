@extends('layouts.frontend')

@section('title', 'Sign up')

@section('content')

<section class="section">
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <h2 class="title">Register</h2>

            <p>
                <a href="{{ action('FacebookLoginController@redirectToProvider') }}">Sign up or log in with Facebook</a>
            </p>


            @component('components/register-form')
            @endcomponent

        </div>
    </div>
</section>
@endsection
