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

        <main class="flex items-start justify-between w-10/12 h-[74vh]">
            <x-partials.settingsSidebar/>
            <div class="box-border flex flex-col items-center w-full h-full gap-6 overflow-auto pl-9">
                @yield('content')
            </div>
        </main>
    </body>
</html>
