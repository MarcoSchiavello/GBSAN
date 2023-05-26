@extends('forms.template')

@section('title', (isset($illness) ? 'Cambia' : 'Aggiungi') . ' disturbo')

@section('form', isset($illness) ? '/update/illness/' . $illness->id : '/add/illness')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome disturbo *" :value="$illness->name ?? ''" />
    <x-inputs.text size="sm" name="id" label="Codice*" :value="$illness->id ?? ''" />
@endsection