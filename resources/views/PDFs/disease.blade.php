@extends('PDFs.template')

@section('content')
    <div style="display: flex; flex-direction: column; gap: 4rem">
        <h1 style="margin-bottom: 2rem" class="text-4xl text-center text-terziary-clr">{!! $patient->name . ' ' . $patient->surname !!}</h1>
        <div style="margin-bottom: 1rem"  class="flex items-baseline gap-4">
            <h3 class="text-3xl font-bold text-primary-clr font-title-fnt">Nome da doença / Nome malattia</h3>
            <h1 class="text-lg font-bold text-text-clr font-title-fnt">{!! $diagnose->disease->name !!} / {!! $diagnose->disease->id  !!}</h1>
        </div>

        <div style="margin-bottom: 1rem" class="flex items-baseline gap-4">
            <h3 class="text-3xl font-bold text-primary-clr font-title-fnt">Data</h3>
            <h1 class="text-lg font-bold text-text-clr font-subtitle-fnt">{!! (new DateTime($diagnose->start_date))->format('d/m/Y') !!}</h1>
        </div>

        @if(!empty($diagnose->medicines))
            <div style="margin-top: 1rem" class="flex items-baseline gap-4">
                <h3 class="text-xl font-bold text-primary-clr font-title-fnt">Medicação / Medicine</h3>
                <ul>
                    @foreach($diagnose->medicines as $medicine)
                        <h1  style="margin-top: 1rem; margin-bottom: 2rem; border:solid 1px black;padding: 1rem; margin-bottom:1rem;" class="text-lg font-bold text-text-clr font-subtitle-fnt">
                            <span class="text-secondary-clr">{!! $medicine->name !!}</span><br>
                            Quantia / Quantità: {!! $medicine->pivot->quantity !!} <br>
                            Quando: {!! $medicine->pivot->when !!} <br>
                            início / Inizio: {!! (new DateTime($medicine->pivot->start_date))->format('d/m/Y') !!} <br>
                            Fim / Fine: {!! (new DateTime($medicine->pivot->end_date))->format('d/m/Y') !!}
                        </h1>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Observações / Osservazioni</h1>
            <h3 class="font-text-fnt">
                {!! $diagnose->note !!}
            </h3>
        </div>
    </div>
@endsection