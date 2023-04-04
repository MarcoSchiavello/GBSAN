@extends('forms.template')

@section('title', 'Aggiungi medicina')

@section('form', '/add/medicine')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome Medicina *" />
    <x-inputs.text size="sm" name="id" label="Codice*"/>
@endsection