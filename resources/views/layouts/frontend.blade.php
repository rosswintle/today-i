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
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                    @component('components.logout-link')
                    @endcomponent
                    @component('components.logout-form')
                    @endcomponent
                @else
                    <a href="{{ url('/login') }}">Login</a>
                @endif
            </div>
        @endif

        @yield('content')
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
