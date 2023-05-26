@extends('template')

@push('js')
    <script src="{{ asset('js/requests.js') }}" type="module"></script>
@endpush

@section('page')
    <div class="flex flex-col w-2/3 gap-9">
        <x-partials.patientData :patient="$patient" /> 

        <div class="box-border flex w-full gap-10 px-5 text-lg font-bold border-b-2 text-secondary-clr border-secondary-clr font-subtitle-fnt ">
            <a href="/patient/{!! $patient->id !!}/diseases" @class([ 'cursor-pointer', 'hover:text-primary-clr', 'text-primary-clr' => str_contains(URL::current(), '/diseases')])>Malattie</a>
            <a href="/patient/{!! $patient->id !!}/illnesses" @class([ 'cursor-pointer', 'hover:text-primary-clr', 'text-primary-clr' => str_contains(URL::current(), '/illnesses')])>Disturbi</a>
            <a href="/patient/{!! $patient->id !!}/vaccinations" @class([ 'cursor-pointer', 'hover:text-primary-clr', 'text-primary-clr' => str_contains(URL::current(), '/vaccinations')])>Vaccini</a>
            <a href="/patient/{!! $patient->id !!}/prescriptions" @class([ 'cursor-pointer', 'hover:text-primary-clr', 'text-primary-clr' => str_contains(URL::current(), '/prescriptions')])>Prescrizioni</a>
        </div>

        <div class="flex flex-col gap-6">
            <x-partials.searchBar />
            @yield('list')
        </div>
    </div>
@endsection
