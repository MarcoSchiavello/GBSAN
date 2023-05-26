@extends('PDFs.template')

@section('content')
    <div style="display: flex; flex-direction: column; gap: 4rem">
        <h1 style="margin-bottom: 2rem" class="text-4xl text-center text-terziary-clr">{!! $patient->name . ' ' . $patient->surname !!}</h1>
        <div style="margin-bottom: 1rem"  class="flex items-baseline gap-4">
            <h3 class="text-3xl font-bold text-primary-clr font-title-fnt">Nome vaccino</h3>
            <h1 class="text-lg font-bold text-text-clr font-title-fnt">{!! $vaccination->name !!} / {!! $vaccination->id !!}</h1>
        </div>
    
        <div style="margin-bottom: 1rem" class="flex items-baseline gap-4">
            <h3 class="text-3xl font-bold text-primary-clr font-title-fnt">Data inizio</h3>
            <h1 class="text-lg font-bold text-text-clr font-subtitle-fnt">{!! (new DateTime($vaccination->pivot->date))->format('d/m/Y') !!}</h1>
        </div>

        <div style="margin-bottom: 1rem" class="flex items-baseline gap-4">
            <h3 class="text-3xl font-bold text-primary-clr font-title-fnt">Data richiamo</h3>
            <h1 class="text-lg font-bold text-text-clr font-subtitle-fnt">{!! (new DateTime($vaccination->pivot->next_date))->format('d/m/Y') !!}</h1>
        </div>
    
        <div>
            <h1 class="text-3xl font-bold text-primary-clr font-subtitle-fnt">Osservazioni</h1>
            <h3 class="font-text-fnt">
                {!! $vaccination->pivot->note !!}
            </h3>
        </div>
    </div>
@endsection