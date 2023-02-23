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
        <x-nav />

        <div class="flex items-start w-4/5 gap-12">
            <div class="flex items-center justify-center w-1/2">     
                <img class="w-63 rounded-xl" src="{{ asset('imgs/flag.png') }}" alt="Guinea bissau flag">
            </div>
            <div class="flex flex-col items-start justify-center w-1/2 gap-3">     
                <h1 class="text-3xl font-bold text-terziary-clr font-title-fnt">GBSAN</h1>
                <p class="text-lg text-justify font-text-fnt">
                    Lorem ipsum dolor sit amet, consectetur adipiscing e
                    lit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex 
                    ea commodo consequat. Duis aute irure dolor in 
                    reprehenderit
                </p>
            </div>
        </div>

        <div class="flex flex-col items-center w-2/3 gap-10">
            <h1 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Enti coinvolti</h1>
            <div class="flex items-center justify-between w-full">
                <a href=""><img class="w-32" src="{{ asset('imgs/onlus.png') }}" alt="onlus"></a>
                <a href=""><img class="w-32" src="{{ asset('imgs/avogadro.png') }}" alt="avogadro"></a>
                <a href=""><img class="w-32" src="{{ asset('imgs/abalite.png') }}" alt="abalite"></a>
            </div>
        </div>
    </body>
</html>
