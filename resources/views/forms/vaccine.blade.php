@extends('forms.template')

@section('title', 'Aggiungi Vaccino')

@section('form', '/add/vaccine')

@section('content')
    <x-inputs.text size="sm" name="code" label="Codice *" />
    <x-inputs.text size="sm" name="name" label="Nome *" />
@endsection