@extends('forms.template')

@section('title', (isset($vaccine) ? 'Cambia' : 'Aggiungi') . ' Vaccino')

@section('form', isset($vaccine) ? '/update/vaccine/' . $vaccine->id : '/add/vaccine')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome vaccino *" :value="$vaccine->name ?? ''" />
    <x-inputs.text size="sm" name="id" label="Codice *" :value="$vaccine->id ?? ''" />
@endsection