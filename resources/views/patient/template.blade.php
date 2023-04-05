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
        
        <div class="flex flex-col w-2/3 gap-9">

            <div class="box-border flex w-full gap-10 px-5 text-lg font-bold border-b-2 text-secondary-clr border-secondary-clr font-subtitle-fnt ">
                <h1>Malattie</h1>
                <h1>Disturbo</h1>
                <h1>Vaccino</h1>
                <h1>Prescrizioni</h1>
            </div>

            <div class="flex flex-col gap-6">
                @yield('list')
            </div>
        </div>

    </body>
</html>
