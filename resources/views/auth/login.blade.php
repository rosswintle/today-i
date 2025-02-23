@extends('layouts.frontend')

@section('title', 'Login')

@section('content')

<section class="section">
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
                <h2 class="title">Login</h2>

                @component('components/login-form')
                @endcomponent
            </div>
        </div>
    </div>
</section>

@endsection
