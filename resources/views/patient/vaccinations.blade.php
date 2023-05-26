@extends('patient.template')

@section('list')
    @foreach($patient->vaccinations as $vaccination)
        <x-partials.patientCard delete="/patient/{{ $patient->id }}/delete/vaccination/{{ $vaccination->pivot->id }}"
                                :user="$vaccination->users()->wherePivot('id', '=', $vaccination->pivot->id)->first()->username"
                                put="/patient/{{ $patient->id }}/update/vaccination/{{ $vaccination->pivot->id }}"
                                print="/patient/{{ $patient->id }}/print/vaccination/{{ $vaccination->pivot->id }}">
            <div class="flex items-baseline gap-4">
                <h1 class="text-3xl font-bold text-terziary-clr font-title-fnt">{!! $vaccination->name !!}</h1>
                <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">{!! $vaccination->id !!}</h3>
            </div>
            <div class="flex gap-10">
                <div>
                    <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Data vaccino</h1>
                    <h3 class="font-text-fnt">
                        {!! (new DateTime($vaccination->pivot->date))->format('d/m/Y') !!}
                    </h3>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Data richiamo</h1>
                    <h3 class="font-text-fnt">
                        {!! (new DateTime($vaccination->pivot->next_date))->format('d/m/Y') !!}
                    </h3>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Osservazioni</h1>
                <h3 class="font-text-fnt">
                    {!! $vaccination->pivot->note !!}
                </h3>
            </div>
        </x-partials.patientCard>
    @endforeach
@endsection