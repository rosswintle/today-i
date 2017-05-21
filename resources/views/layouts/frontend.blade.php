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
        
        <nav class="nav">
            <div class="container">
            
                <div class="nav-left">
                    <a class="nav-item" href="{{ url('/') }}">Today I</a>
                </div>

                <div class="nav-right">

                    @if (Route::has('login'))
                        @if (Auth::check())
                            <a class="nav-item" href="{{ url('/') }}">Home</a>
                            <a class="nav-item" href="{{ url('/me') }}">Me</a>
                            @component('components.logout-link')
                            @endcomponent
                            @component('components.logout-form')
                            @endcomponent
                        @else
                            <a class="nav-item" href="{{ url('/login') }}">Login</a>
                        @endif
                    @endif

                </div>
            </div>
        </nav>

        @component('components/alerts');
        @endcomponent

        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                    Today-I is a project of Oikos.
                </div>
            </div>
        </footer>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
