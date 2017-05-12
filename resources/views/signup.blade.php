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

        <section>
            <div class="container">

                <div class="columns">
                    <div class="column">
                        <div class="content has-text-centered">
                            <h2>Sign up</h2>

                        </div>
                    </div>

                    <div class="column">
                        <div class="content has-text-centered">
                            <h2>Login</h2>
                            @component('components/login-form')
                            @endcomponent
                        </div>
                    </div>
                </div>

            </div>
        </section>

@endsection