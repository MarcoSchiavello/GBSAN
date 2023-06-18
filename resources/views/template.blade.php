<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'GBSAN')</title>
        <link rel="icon" href="{{ asset('imgs/logo.png') }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @stack('css')

        <!-- Scripts -->
        @stack('js')
    </head>
    <body>
        <div class="@yield('class', 'flex flex-col items-center justify-start gap-20 min-h-screen pb-24 w-full')">
            <x-partials.nav :patient="isset($patient) ? $patient->id : null" />
            @yield('page')
        </div>
        <x-partials.footer />
    </body>
</html>
