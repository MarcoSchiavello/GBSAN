@extends('template')

@section('page')
    <main class="flex flex-col items-start justify-between w-5/6">
        <h4 class="font-bold text-md text-primary-clr">Ciao, &nbsp;<span class="notranslate">{!!  Auth::user()->name . ' ' . Auth::user()->surname !!}</span></h4>
        <h1 class="mb-10 text-5xl font-bold text-terziary-clr">Lista Pazienti</h1>
        
        <x-partials.filter />

        <div class="flex flex-col w-full overflow-hidden border-2 mt-10 rounded-md border-secondary-clr [&>:not(:last-child)]:border-b-2 [&>:not(:last-child)]:border-secondary-clr">
            <div class="grid grid-cols-11 font-bold justify-items-center bg-secondary-clr text-bg-clr font-subtitle-fnt">
                <h1 class="col-span-3">Nominativo</h1>
                <h1 class="col-span-2">Data di nascita</h1>
                <h1>Età</h1>
                <h1>Sesso</h1>
                <h1>Gruppo sanguigno</h1>
                <h1>Moranca</h1>
                <h1 class="col-span-2">Villaggio</h1>
            </div>
            @foreach ($patients as $patient)
                <a href="patient/{!! $patient->id !!}/illnesses">
                    <div class="grid grid-cols-11 font-bold font-text-fnt ease-out duration-300 hover:bg-gray-400 cursor-pointer [&>:not(:last-child)]:border-r-2 [&>*]:px-2 [&>*]:py-1 [&>:not(:last-child)]:border-secondary-clr">
                        <h1 class="col-span-3 notranslate">{!! $patient->name . ' ' . $patient->surname !!}</h1>
                        <h1 class="col-span-2">{!! (new DateTime($patient->birth_date))->format('d/m/Y') !!}</h1>
                        <h1>{!! $patient->age() !!}</h1>
                        <h1>{!! $patient->sex === 'M' ? 'Maschio' : 'Femmina' !!}</h1>
                        <h1 class="notranslate">{!! $patient->blood_type !!}</h1>
                        <h1>{!! $patient->moranca ?? 'Non dafinita' !!}</h1>
                        <h1 class="col-span-2 notranslate">{!! $patient->village->name !!}</h1>
                    </div>
                </a>
            @endforeach
        </div>
    </main>
@endsection
