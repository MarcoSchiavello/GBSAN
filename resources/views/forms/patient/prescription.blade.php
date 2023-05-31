@extends('forms.template')

@section('title')
    {{ (isset($prescription) ? 'Aggiorna' : 'Aggiungi') }} prescrizione a&nbsp;<span class="notranslate">{{ $patient->name . ' ' . $patient->surname }}</span>
@endsection

@section('form', '/patient/' . $patient->id . (isset($prescription) ? '/update/prescription/'. $prescription->id : '/add/prescription'))

@section('content')
    <x-inputs.textarea size="sm" name="prescription" label="Prescrizione" rows="7" :value="$prescription->prescription ?? ''" />
    <x-partials.medicineComp :medicinesUsed="$prescription->medicines ?? []" />
@endsection