@extends('forms.template')

@section('title', 'Aggiungi malatia a ' . $patient->name . ' ' . $patient->surname)

@section('form', '/patient/' . $patient->id . '/add/disease')

@section('content')
    <x-inputs.select name="disease" label="Malatia *" :values="$diseases" />
    <x-inputs.text size="sm" type="date" value="{{ (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('Y-m-d') }}" name="date" label="Data malatia *" />
    <x-partials.medicine-comp :title="true" />
    <x-inputs.textarea size="sm" name="note" label="Osservazioni" rows="7" />
@endsection