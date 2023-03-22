@extends('forms.template')

@section('title', 'Aggiungi disturbo')

@section('form', '/add/ilness')

@section('content')
<x-inputs.text size="sm" name="name" label="Nome disturbo *" />
<x-inputs.text size="sm" name="code" label="Codice*" />
@endsection