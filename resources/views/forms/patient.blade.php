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
    <body class="flex flex-col items-center justify-between gap-2">
        <x-nav :auth="true" />

        <form action="/add/patient" method="POST" class="flex flex-col items-start justify-between w-5/6 gap-1">
            @csrf
            <h1 class="m-auto text-3xl font-bold text-terziary-clr font-title-fnt">Aggiungi Paziente</h1>
            <h4 class="text-secondary-clr">* Campi obbigatori</h4>
            <x-inputs.text size="sm" name="name" label="Nominativo *" />
            <div class="flex justify-between w-full gap-3">
                <x-inputs.text size="sm" name="birthDate" label="Data Nascita *" type="date" />
                <x-inputs.text size="sm" name="sex" label="Sesso *" />
                <x-inputs.text size="sm" name="height" label="Altezza" />
            </div>
            <div class="flex justify-between w-full gap-3">
                <x-inputs.text size="sm" name="bmi" label="BMI"/>
                <x-inputs.text size="sm" name="maxPres" label="Pressione Massima" />
                <x-inputs.text size="sm" name="minPres" label="Pressione Minima" />
            </div>
            <div class="flex justify-between w-full gap-3">
                <x-inputs.text size="sm" name="cardFreq" label="Frequenza Cardiaca" />
                <x-inputs.text size="sm" name="home" label="Casa" />
                <x-inputs.text size="sm" name="bloodType" label="Gruppo Sanguigno" />
            </div>
            <div class="flex justify-between w-full gap-3">
                <x-inputs.text size="sm" name="village" label="Villaggio" />
                <x-inputs.text size="sm" name="role" label="Ruolo" />
            </div>
            <x-inputs.text size="sm" name="overview" label="Quadro Clinico" />
            <x-controls.button text="Aggiungi" type="button" class="m-auto mt-3" />
        </form>
    </body>
</html>
