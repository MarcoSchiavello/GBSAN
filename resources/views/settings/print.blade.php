@extends('settings.template')

@section('content')
    <form action="/settings/print"  class="flex flex-col items-center w-full gap-6" method="POST">
        @csrf
        <x-inputs.text size="sm" name="hospital" label="Nome ospedale" />
        <x-inputs.text size="sm" name="adress" label="Indirizzo ospedale" />
        <x-inputs.text size="sm" name="contacts" label="Contatti" />
        <x-controls.button type="button" text="Cambia" />
    </form>

    <div class="flex flex-col items-start w-full gap-3">
        <h2 class="text-3xl font-bold text-primary-clr font-subtitle-fnt">Anteprima</h2>
        <div class="w-full bg-white border-2 rounded-lg h-80 border-primary-clr">
            
        </div>
    </div>
@endsection