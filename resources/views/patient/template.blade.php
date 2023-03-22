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
            <div class="flex justify-between">
                <div class="flex items-baseline gap-3">
                    <div class="w-16 h-16 bg-slate-500"></div>
                    <h1 class="text-5xl font-bold text-terziary-clr font-title-fnt">Marco Schiavello</h1>
                </div>
                <div class="flex gap-3">
                    <x-controls.button type="button" :fit="true" ><x-ri-pencil-line class="w-14 fill-bg-clr" /></x-controls.button>
                    <x-controls.button type="button" :fit="true" ><x-ri-delete-bin-5-line class="w-14 fill-bg-clr" /></x-controls.button>
                </div>
            </div>

            <div class="flex flex-col gap-1">
                <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">ID anagrafe</h2>
                <h3 class="text-xl font-bold font-text-fnt">valore</h3>
            </div>
            
            <div class="grid grid-cols-3">
                <div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">titolo</h2>
                    <h3 class="text-xl font-bold font-text-fnt">valore</h3>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">titolo</h2>
                    <h3 class="text-xl font-bold font-text-fnt">valore</h3>
                </div><div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">titolo</h2>
                    <h3 class="text-xl font-bold font-text-fnt">valore</h3>
                </div><div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">titolo</h2>
                    <h3 class="text-xl font-bold font-text-fnt">valore</h3>
                </div><div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">titolo</h2>
                    <h3 class="text-xl font-bold font-text-fnt">valore</h3>
                </div><div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">titolo</h2>
                    <h3 class="text-xl font-bold font-text-fnt">valore</h3>
                </div><div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">titolo</h2>
                    <h3 class="text-xl font-bold font-text-fnt">valore</h3>
                </div><div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">titolo</h2>
                    <h3 class="text-xl font-bold font-text-fnt">valore</h3>
                </div>
            </div>

            <div class="flex flex-col justify-end text-primary-clr">
                <h4>Aggiunto da Marco</h4>
                <h4>Ultima modifica 15/04/2023 15:45</h4>
            </div>

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
