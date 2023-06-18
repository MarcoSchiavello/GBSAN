@extends('PDFs.template')

@section('content')
    <div style="display: flex; flex-direction: column; gap: 4rem">
        <h1 style="margin-bottom: 2rem" class="text-4xl text-center text-terziary-clr">{!! $patient->name . ' ' . $patient->surname !!}</h1>

        <div style="margin-bottom: 1rem" class="flex items-baseline gap-4">
            <h3 class="text-3xl font-bold text-primary-clr font-title-fnt">Data prescrizione / Data da prescrição</h3>
            <h1 class="text-lg font-bold text-text-clr font-subtitle-fnt">{!! (new DateTime($prescription->date))->format('d/m/Y') !!}</h1>
        </div>

        @if(!empty($prescription->medicines))
            <div style="margin-bottom: 1rem" class="flex items-baseline gap-4">
                <h3 class="text-3xl font-bold text-primary-clr font-title-fnt">Medicação / Medicine</h3>
                <ul>
                    @foreach($prescription->medicines as $medicine)
                        <h1 style="margin-top: 1rem; margin-bottom: 2rem; border:solid 1px black;padding: 1rem; margin-bottom:1rem;" class="text-lg font-bold text-text-clr font-subtitle-fnt">
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
            <h1 class="text-3xl font-bold text-primary-clr font-subtitle-fnt">Prescrição / Prescrizione</h1>
            <h3 class="text-lg font-text-fnt">
                {!! $prescription->prescription !!}
            </h3>
        </div>
    </div>
@endsection