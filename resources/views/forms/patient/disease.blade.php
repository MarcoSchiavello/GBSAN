@extends('forms.template')

@section('title', (isset($diagnose) ? 'Aggiorna' : 'Aggiungi') . ' malattia a ' . $patient->name . ' ' . $patient->surname)

@section('form', '/patient/' . $patient->id . (isset($diagnose) ? '/update/diagnose/'. $diagnose->id : '/add/disease'))

@section('content')
    <x-inputs.select name="disease" label="Malatia *" :values="$diseases" :init="$diagnose->disease->name ?? ''" />
    <x-inputs.text size="sm" type="date" :value="$diagnose->date ?? (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('Y-m-d')" name="date" label="Data malatia *" />
    <x-partials.medicine-comp :title="true" :medicinesUsed="$diagnose->medicines ?? []" />
    <x-inputs.textarea size="sm" name="note" label="Osservazioni" rows="7" :value="$diagnose->note ?? ''" />
@endsection