@extends('settings.template')

@push('js')
    <script src="{{ asset('js/requests.js') }}" type="module"></script>
@endpush

@section('content')
    <form action="/settings/print"  class="flex flex-col items-center w-full gap-6" method="POST">
        @csrf
        <x-inputs.text size="sm" name="hospital" label="Nome ospedale" :value="$pdf['name']" />
        <x-inputs.text size="sm" name="address" label="Indirizzo ospedale" :value="$pdf['address']" />
        <x-inputs.text size="sm" name="contacts" label="Contatti" :value="$pdf['contacts']" />
        <x-controls.button type="button" text="Cambia" />
    </form>

    <div class="flex flex-col items-start w-full gap-3">
        <h2 class="flex items-baseline gap-6 text-3xl font-bold text-primary-clr font-subtitle-fnt">
            Anteprima
            <x-controls.button type="button" :fit="true" :attr="[ 
                'post' => '/print/template', 
                'token' => csrf_token() 
            ]"><x-ri-printer-line class="w-10 fill-bg-clr" /></x-controls.button>
        </h2>
        <div class="w-full bg-white border-2 rounded-lg h-80 border-primary-clr">
            @include('PDFs.template')
        </div>
    </div>
@endsection