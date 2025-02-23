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

                            @component('components/register-form')
                            @endcomponent
                        </div>
                    </div>

                    <div class="column">
                        <div class="content">
                            <h2 class="title">Login</h2>

                            @component('components/login-form')
                            @endcomponent
                        </div>
                    </div>
                </div>

            </div>
        </section>

@endsection
