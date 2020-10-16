@extends('layouts.frontend')

@section('title', 'Sign up')

@section('content')

        <section class="section">
                <div class="has-text-centered">
                    <h1 class="title">
                        Today I...
                    </h1>
                </div>
        </section>

        <section class="section">
            <div class="container">

                <div class="columns">
                    <div class="column">
                        <div class="content">
                            <h2 class="title">Sign up</h2>

                            <p>
                                <a href="{{ action('App\Http\Controllers\FacebookLoginController@redirectToProvider') }}">Sign up or log in with Facebook</a>
                            </p>

                            @component('components/register-form')
                            @endcomponent
                        </div>
                    </div>

                    <div class="column">
                        <div class="content">
                            <h2 class="title">Login</h2>

                            <p>
                                <a href="{{ action('App\Http\Controllers\FacebookLoginController@redirectToProvider') }}">Sign up or log in with Facebook</a>
                            </p>

                            @component('components/login-form')
                            @endcomponent
                        </div>
                    </div>
                </div>

            </div>
        </section>

@endsection
