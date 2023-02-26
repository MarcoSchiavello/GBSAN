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
    <body class="flex flex-col">
        <x-nav :logo="false" />

        <form action="/login" method="POST" class="flex flex-col items-center justify-center w-1/5 h-full gap-10 m-auto">
            @csrf
            <img class="w-44 rounded-xl" src="{{ asset('imgs/logo.png') }}" alt="GBSAN logo">
            <x-inputs.text name="username" label="Username" />
            <x-inputs.text name="password" label="Password" type="password" />
            <x-controls.button text="Accedi" type="button" />
        </form>
    </body>
</html>
