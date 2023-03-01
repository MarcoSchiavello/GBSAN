@extends('forms.template')

@section('title', 'Aggiungi disturbo a Nome Paziente')

@section('form', 'ilness')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome Disturbo *" />
    <x-inputs.text size="sm" type="date" value="{{ (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('Y-m-d') }}" name="date" label="Data disturbo *" />
    <x-inputs.textarea size="sm" name="overview" label="Osservazioni" rows="7" />
@endsection