@extends('forms.template')

@section('title', 'Aggiungi malatia')

@section('form', '/add/disease')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome malatia *" />
    <x-inputs.text size="sm" name="id" label="Codice*" />
@endsection