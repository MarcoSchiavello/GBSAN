@extends('forms.template')

@section('title', 'Aggiungi prescrizione a Nome paziente')

@section('form', '/patient/1/add/prescription')

@section('content')
    <x-inputs.textarea size="sm" name="prescription" label="Prescrizione" rows="7" />
    <x-partials.medicine />
@endsection