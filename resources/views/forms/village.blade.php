@extends('forms.template')

@section('title', (isset($village) ? 'Cambia' : 'Aggiungi') . ' Villagio')

@section('form', isset($village) ? '/update/village/' . $village->id : '/add/village')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome *" :value="$village->name ?? ''" />
    <x-inputs.textarea size="sm" name="desc" label="Descrizione" rows="7" :value="$village->id ?? ''" />
@endsection