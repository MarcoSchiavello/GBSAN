@extends('forms.template')

@section('title', 'Aggiungi disturbo')

@section('form', '/add/illness')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome disturbo *" />
    <x-inputs.text size="sm" name="id" label="Codice*" />
@endsection