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

        <main class="flex flex-col items-start justify-between w-5/6">
            <h4 class="font-bold text-md text-primary-clr">Ciao, {!!  Auth::user()->name . ' ' . Auth::user()->surname !!}</h4>
            <h1 class="mb-10 text-5xl font-bold text-terziary-clr">Lista Pazienti</h1>
            <h2 class="mb-2 text-2xl font-bold text-primary-clr">Filtri</h2>
            <div class="grid w-full grid-flow-row-dense grid-cols-6 gap-2">
                <x-inputs.text label="Nominativo" name="name" size="sm" />
                <x-inputs.text label="Data di nascita" name="birthDate" type="date" size="sm" />
                <x-inputs.text label="Gruppo sanguigno" name="bloodType" size="sm" />
                <x-inputs.text label="Villagio" name="village" size="sm" />
                <x-inputs.text label="Eta" name="age" type="number" size="sm" />
                <x-inputs.text label="Sesso" size="sm" />
            </div>

            <div class="flex flex-col w-full overflow-hidden border-2 mt-10 rounded-md border-secondary-clr [&>:not(:last-child)]:border-b-2 [&>:not(:last-child)]:border-secondary-clr">
                <div class="grid grid-cols-11 font-bold justify-items-center bg-secondary-clr text-bg-clr font-subtitle-fnt">
                    <h1 class="col-span-3">Nominativo</h1>
                    <h1 class="col-span-2">Data di nascita</h1>
                    <h1>Eta</h1>
                    <h1>Sesso</h1>
                    <h1 class="col-span-2">Gruppo sanguigno</h1>
                    <h1 class="col-span-2">Villagio</h1>
                </div>
                @foreach ($patients as $patient)
                    <div class="grid grid-cols-11 font-bold font-text-fnt ease-out duration-300 hover:bg-gray-400 cursor-pointer [&>:not(:last-child)]:border-r-2 [&>*]:px-2 [&>*]:py-1 [&>:not(:last-child)]:border-secondary-clr">
                        <h1 class="col-span-3">{!! $patient->name . $patient->surname !!}</h1>
                        <h1 class="col-span-2">{!! $patient->birth_date !!}</h1>
                        <h1>{!! $patient->sex !!}</h1>
                        <h1 class="col-span-2">{!! $patient->blood_type !!}</h1>
                        <h1 class="col-span-2">{!! $patient->village->name !!}</h1>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</html>
