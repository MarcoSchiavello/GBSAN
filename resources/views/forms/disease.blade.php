@extends('forms.template')

@section('title', (isset($disease) ? 'Cambia' : 'Aggiungi') . ' malatia')

@section('form', isset($disease) ? '/update/disease/' . $disease->id : '/add/disease')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nome malatia *" :value="$disease->name ?? ''" />
    <x-inputs.text size="sm" name="id" label="Codice*" :value="$disease->id ?? ''" />
@endsection