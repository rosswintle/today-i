@extends('layouts.frontend')

@section('title', 'Change settings')

@section('content')

        <section class="section">
            <div class="container columns">

                <div class="content column is-half is-offset-one-quarter">
                    <h2 class="title">Change settings</h2>
                    @component('components/user-settings-form', ['user' => $user])
                    @endcomponent
                </div>

            </div>
        </section>

@endsection