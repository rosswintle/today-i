@extends('layouts.frontend')

@section('title', 'My Profile')

@section('content')

        <section class="section">
            <div class="container content has-text-centered">
                <h1 class="title">
                    Today I...
                </h1>

                @component( 'components/action-form', [ 'types' => $types ] )
                @endcomponent

            </div>
        </section>

        <hr>

        @component( 'components/action-list', [ 'actions' => $actions ] )
        @endcomponent

        <email-hour-selector initial-hour="12" initial-action="http://"></email-hour-selector>

@endsection