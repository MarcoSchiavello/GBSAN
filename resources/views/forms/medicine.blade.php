@extends('forms.template')

@section('title', (isset($medicine) ? 'Cambia' : 'Aggiungi') . ' medicina')

@section('form', isset($medicine) ? '/update/medicine/' . $medicine->id : '/add/medicine')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome Medicina *" :value="$medicine->name ?? ''" />
    <x-inputs.text size="sm" name="id" label="Codice*" :value="$medicine->id ?? ''" />
@endsection