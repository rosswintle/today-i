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
                <div class="container content">
                    <h3 class="subtitle">
                        Creativity is more important than ever. What will you do today?
                    </h3>
                    <p>
                        In a world that seems to have gone mad recently, creativity has become more important than ever. Not just "arts", but making, doing, sharing, writing, hacking, teaching, growing, mending and so many other things are creative endeavours.
                    </p>
                    <p>
                        I try to daily share something I've made with the hashtag #todayimade and something I'm thankful for with the hashtag #thankyoutoday.
                    </p>
                    <p>
                        <strong>"Today I..."</strong> is partly an excuse to practise my coding, but it will also hopefully be a reminder to do something creative every day; to take pride in that; to share that with others; and to encourge them to do the same.
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container content has-text-centered">
                <h1 class="title">
                    Today I...
                </h1>

                <div id="types">
                    @foreach ($types as $type)
                        <button data-type-id="{{ $type->id }}" class="button is-info is-large">
                            <span class="icon">
                                <i class="fa {{ $type->icon_class }}"></i>
                            </span>
                            <span>
                                {{ $type->name }}
                            </span>
                        </button>
                    @endforeach 
                </div>

                <form id="action-form" method="POST" action="{{ action('ActionController@store') }}">
                    {{ csrf_field() }}
                    <input id="typeInput" type="hidden" name="type" value="1">
                    <p>
                        <input class="input is-large" type="text" name="text" placeholder="thing that you did...">
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Boom!" class="button is-primary is-large">
                    </p>
                </form>

            </div>
        </div>


@endsection('body')