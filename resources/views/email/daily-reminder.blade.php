@component('mail::message')
# Your daily creativity reminder

Hello {{ $name }}!

This is your daily reminder from Today I to change the world by doing something creative.

## What will you do today?

@component('mail::button', ['url' => $url, 'color' => 'green'])
Do Something!
@endcomponent

Thanks for all you do!

The magical Today I machine
@endcomponent
