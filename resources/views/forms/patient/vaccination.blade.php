@extends('forms.template')

@section('title', 'Aggiungi Vaccianazione a ' . $patient->name . ' ' . $patient->surname)

@section('form', '/patient/' . $patient->id . '/add/vaccination')

@section('content')
    <x-inputs.select name="vaccineId" label="Vaccino *" :values="$vaccines" />
    <x-inputs.text size="sm" type="date" value="{{ (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('Y-m-d') }}" name="vaccinationDate" label="Data Vaccinazione *" />
    <x-inputs.text size="sm" type="date" name="recallDate" label="Data Richiamo *" />
    <x-inputs.textarea size="sm" name="note" label="Osservazioni" rows="7" />
@endsection