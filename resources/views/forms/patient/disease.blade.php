@extends('forms.template')

@section('title', 'Aggiungi malatia a Nome Paziente')

@section('form', '/patient/1/add/disease')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome malatia *" />
    <x-inputs.text size="sm" type="date" value="{{ (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('Y-m-d') }}" name="date" label="Data malatia *" />
    <x-inputs.text size="sm" name="medicine" label="Medicine prescritte *" />
    <x-inputs.textarea size="sm" name="overview" label="Osservazioni" rows="7" />
@endsection