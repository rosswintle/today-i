@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            You are receiving this because you signed up to daily creativity reminders from <a href="{{ config('app.url') }}">Today I...</a><br>
            You can change the time of day that this gets sent or stop emails being sent on <a href="{{ action('App\Http\Controllers\UserSettingsController@edit', [ 'user' => $user->id ]) }}">your settings page</a>.
        @endcomponent
    @endslot
@endcomponent
