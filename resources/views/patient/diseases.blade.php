@extends('patient.template')

@section('list')
    @foreach($patient->diagnoses as $diagnose)
        <x-partials.patientCard :user="$diagnose->user->username">
            <div class="flex items-baseline gap-4">
                <h1 class="text-3xl font-bold text-terziary-clr font-title-fnt">{!! $diagnose->disease->name !!}</h1>
                <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">{!! (new DateTime($diagnose->start_date))->format('d/m/Y') !!}</h3>
            </div>
            
            @if(!empty($diagnose->medicines))
                <div>
                    <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Medicine</h1>
                    <div class="flex [&>:not(:last-child)]:border-r-2 [&>:not(:last-child)]:border-primary-clr">
                        @foreach($diagnose->medicines as $medicine)
                            <div class="flex flex-col items-center px-5">
                                <h3 class="text-secondary-clr font-subtitle-fnt text-[1.3rem]">{!! $medicine->name !!}</h3>
                                <div class="flex gap-4">
                                    <h4 class="flex gap-1">{!! $medicine->pivot->quantity !!} <x-fas-utensil-spoon class="w-6 fill-text-clr"/></h4>
                                    <h4 class="flex gap-1">{!! $medicine->pivot->when !!} <x-ri-sun-line class="w-6 fill-text-clr"/></h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Osservazioni</h1>
                <h3 class="font-text-fnt">
                    {!! $diagnose->note !!}
                </h3>
            </div>
        </x-partials.patientCard>
    @endforeach
@endsection