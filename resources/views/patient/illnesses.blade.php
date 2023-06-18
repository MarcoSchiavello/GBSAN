@extends('patient.template')

@section('list')
    @foreach ($patient->illnesses as $illness)
        <x-partials.patientCard delete="/patient/{{ $patient->id }}/delete/illness/{{ $illness->pivot->id }}"
                                :user="$illness->users()->wherePivot('id', '=', $illness->pivot->id)->first()->username"
                                put="/patient/{{ $patient->id }}/update/illness/{{ $illness->pivot->id }}"
                                print="/patient/{{ $patient->id }}/print/illness/{{ $illness->pivot->id }}">
            <div class="flex items-baseline gap-4">
                <h1 class="text-3xl font-bold text-terziary-clr font-title-fnt notranslate">{!! $illness->name !!}</h1>
                <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">{!! (new DateTime($illness->pivot->start_date))->format('d/m/Y') !!}</h3>
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Osservazioni</h1>
                <h3 class="font-text-fnt notranslate">
                    {!! $illness->pivot->note !!} 
                </h3>
            </div>
        </x-partials.patientCard>
    @endforeach
@endsection