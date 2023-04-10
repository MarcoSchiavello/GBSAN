@extends('forms.template')

@section('title', 'Aggiungi prescrizione a ' . $patient->name . ' ' . $patient->surname)

@section('form', '/patient/' . $patient->id . '/add/prescription')

@section('content')
    <x-inputs.textarea size="sm" name="prescription" label="Prescrizione" rows="7" />
    <x-partials.medicineComp />
@endsection