<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - {{ config('app.name') }}</title>

        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    </head>
    <body>

        <div class="container">
            <nav class="nav">

                <div class="nav-left logo">
                    <a class="nav-item" href="{{ url('/') }}">Today I</a>
                </div>

                <div class="nav-right">

                    @if (Route::has('login'))
                        @if (Auth::check())
                            <a class="nav-item" href="{{ url('/me') }}">Me</a>
                            <a class="nav-item" href="{{ action('App\Http\Controllers\UserSettingsController@edit', ['user' => Auth::id() ]) }}">Settings</a>
                            @component('components.logout-link')
                            @endcomponent
                            @component('components.logout-form')
                            @endcomponent
                        @else
                            <a class="nav-item" href="{{ url('/login') }}">Login</a>
                            <a class="nav-item" href="{{ url('/signup') }}">Sign Up</a>
                        @endif
                    @endif

                </div>
            </nav>
        </div>

        @component('components/alerts');
        @endcomponent

        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                    Today-I is a project of <a href="https://oikos.digital">Oikos Digital</a> and <a href="https://rosswintle.uk">Ross Wintle</a>.<br>
                    Updates at <a href="https://twitter.com/today_i_tweeted">@today_i_tweeted</a>
                </div>
            </div>
        </footer>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
