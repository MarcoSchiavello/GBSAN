<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GBSAN</title>
        <link rel="icon" href="{{ asset('imgs/logo.png') }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="flex flex-col items-center justify-between gap-20">
        <x-partials.nav :auth="true" />

        <form action="/add/@yield('form')" method="POST" class="flex flex-col items-start justify-between w-2/3 gap-4">
            @csrf
            <h1 class="m-auto text-3xl font-bold text-terziary-clr font-title-fnt">@yield('title')</h1>
            @yield('content')
            <x-controls.button text="Aggiungi" type="button" class="m-auto mt-3" />
        </form>
    </body>
</html>
