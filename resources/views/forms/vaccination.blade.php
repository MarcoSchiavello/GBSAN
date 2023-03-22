@extends('forms.template')

@section('title', 'Aggiungi Vaccianazione a Nome Paziente')

@section('form', '/add/village')

@section('content')
<x-inputs.text size="sm" name="name" label="Nome vaccino *" />
<x-inputs.text size="sm" name="code" label="Codice*" />
@endsection