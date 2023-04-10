@extends('forms.template')

@section('title', 'Aggiungi disturbo a ' . $patient->name . ' ' . $patient->surname)

@section('form', '/patient/' . $patient->id . '/add/illness')

@section('content')
    <x-inputs.select name="illnessId" label="Disturbo *" :values="$illnesses" />
    <x-inputs.text size="sm" type="date" value="{{ (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('Y-m-d') }}" name="date" label="Data disturbo *" />
    <x-inputs.textarea size="sm" name="note" label="Osservazioni" rows="7" />
@endsection