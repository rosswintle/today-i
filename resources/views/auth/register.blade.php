@extends('layouts.frontend')

@section('content')

<div class="section">
    <div class="columns">
        <div class="is-half is-offset-one-quarter">
            <h2 class="title">Register</h2>

            @component('components/register-form')
            @endcomponent

        </div>
    </div>
</div>
@endsection
