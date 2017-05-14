@extends('layouts.frontend')

@section('title', 'Home')

@section('content')

        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Today I...
                    </h1>
                    <h2 class="subtitle">
                        A daily call to creative action
                    </h2>
                </div>
            </div>
        </section>
        <section class="hero is-light">
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column is-three-quarters content">
                        <h3 class="subtitle">
                            Creativity is more important than ever. What will you do today?
                        </h3>
                        <p>
                            In a world that seems to have gone mad recently, creativity has become more important than ever. Not just "arts", but making, doing, sharing, writing, hacking, teaching, growing, mending and so many other things are creative endeavours.
                        </p>
                        <p>
                            <strong>"Today I..."</strong> is a reminder to do something creative or thoughtful every day, and a journal of those activities. To inspire your creativity; to share it with others; and to encourge them to do the same.
                        </p>
                        <p>
                            Take your first creative action and enter it below to get started.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container content has-text-centered">
                <h1 class="title">
                    Today I...
                </h1>

                @component('components/action-form', [ 'types' => $types ])
                @endcomponent

            </div>
        </section>


@endsection('body')