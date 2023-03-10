@extends('forms.template')

@section('title', 'Aggiungi Villagio')

@section('form', '/add/village')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome *" />
    <x-inputs.textarea size="sm" name="desc" label="Descrizione" rows="7" />
@endsection