@extends('forms.template')

@section('title', 'Aggiungi Vaccianazione a Nome Paziente')

@section('form', '/patient/1/add/vaccination')

@section('content')
    <x-inputs.text size="sm" name="vaccine" label="Vaccino *" />
    <x-inputs.text size="sm" type="date" value="{{ (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('Y-m-d') }}" name="vaccinationDate" label="Data Vaccinazione *" />
    <x-inputs.text size="sm" type="date" name="recallDate" label="Data Richiamo *" />
    <x-inputs.textarea size="sm" name="overview" label="Osservazioni" rows="7" />
@endsection