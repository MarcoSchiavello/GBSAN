@extends('patient.template')

@section('list')
    @foreach($patient->diagnoses as $diagnose)
        <x-partials.patientCard delete="/patient/{{ $patient->id }}/delete/diagnose/{{ $diagnose->id }}" 
                                :user="$diagnose->user->username"
                                put="/patient/{{ $patient->id }}/update/diagnose/{{ $diagnose->id }}"
                                print="/patient/{{ $patient->id }}/print/diagnose/{{ $diagnose->id }}">
            <div class="flex items-baseline gap-4">
                <h1 class="text-3xl font-bold text-terziary-clr font-title-fnt notranslate">{!! $diagnose->disease->name !!}</h1>
                <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">{!! (new DateTime($diagnose->start_date))->format('d/m/Y') !!}</h3>
            </div>
            
            @if(!empty($diagnose->medicines))
                <div>
                    <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Medicine</h1>
                    <div class="flex [&>:not(:last-child)]:border-r-2 [&>:not(:last-child)]:border-primary-clr">
                        @foreach($diagnose->medicines as $medicine)
                            <div class="flex flex-col items-center px-5">
                                <h3 class="text-secondary-clr font-subtitle-fnt text-[1.3rem] notranslate">{!! $medicine->name !!}</h3>
                                <div class="flex gap-4">
                                    <h4 class="flex gap-1">{!! $medicine->pivot->quantity !!} <x-fas-utensil-spoon class="w-6 fill-text-clr"/></h4>
                                    <h4 class="flex gap-1">{!! $medicine->pivot->when !!} @if(intval(explode(':',$medicine->pivot->when)[0]) > 20) <x-ri-moon-line class="w-6 fill-text-clr"/> @else <x-ri-sun-line class="w-6 fill-text-clr"/> @endif</h4>
                                </div>
                                <h3>Inizio: {!! (new DateTime($medicine->pivot->start_date))->format('d/m/Y') !!}</h3>
                                <h3>Fine: {!! (new DateTime($medicine->pivot->end_date))->format('d/m/Y') !!}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Osservazioni</h1>
                <h3 class="font-text-fnt notranslate">
                    {!! $diagnose->note !!}
                </h3>
            </div>
        </x-partials.patientCard>
    @endforeach
@endsection