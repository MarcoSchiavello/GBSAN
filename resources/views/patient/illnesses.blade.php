@extends('patient.template')

@section('list')
    @foreach ($patient->illnesses as $illness)
        <x-partials.patientCard :user="null">
            <div class="flex items-baseline gap-4">
                <h1 class="text-3xl font-bold text-terziary-clr font-title-fnt">{!! $illness->name !!}</h1>
                <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">{!! (new DateTime($illness->pivot->start_date))->format('d/m/Y') !!}</h3>
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Osservazioni</h1>
                <h3 class="font-text-fnt">
                    {!! $illness->pivot->note !!}
                </h3>
            </div>
        </x-partials.patientCard>
    @endforeach
@endsection