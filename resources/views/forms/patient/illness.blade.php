@extends('forms.template')

@section('title') 
    {{ (isset($illness) ? 'Aggiorna' : 'Aggiungi') }} disturbo a&nbsp;<span class="notranslate">{{ $patient->name . ' ' . $patient->surname }}</span>
@endsection

@section('form', '/patient/' . $patient->id . (isset($illness) ? '/update/illness/'. $illness->pivot->id : '/add/illness'))

@section('content')
    <x-inputs.select name="illnessId" label="Disturbo *" :values="$illnesses" :init="isset($illness) ? $illness->id : ''" />
    <x-inputs.text size="sm" type="date" :value="isset($illness) ? $illness->pivot->start_date : (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('Y-m-d')"  name="date" label="Data disturbo *" />
    <x-inputs.textarea size="sm" name="note" label="Osservazioni" rows="7" :value="isset($illness) ? $illness->pivot->note : ''" />
@endsection