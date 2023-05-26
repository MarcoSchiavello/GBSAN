@extends('forms.template')

@section('title', (isset($vaccination) ? 'Aggiorna' : 'Aggiungi') . ' vaccinazione a ' . $patient->name . ' ' . $patient->surname)

@section('form', '/patient/' . $patient->id . (isset($vaccination) ? '/update/vaccination/'. $vaccination->pivot->id : '/add/vaccination'))

@section('content')
    <x-inputs.select name="vaccineId" label="Vaccino *" :values="$vaccines" :init="$vaccination->name ?? ''" />
    <x-inputs.text size="sm" type="date" :value="$vaccination->pivot->date ?? (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('Y-m-d')" name="vaccinationDate" label="Data Vaccinazione *" />
    <x-inputs.text size="sm" type="date" name="recallDate" label="Data Richiamo *" :value="$vaccination->pivot->next_date ?? ''" />
    <x-inputs.textarea size="sm" name="note" label="Osservazioni" rows="7" :value="$vaccination->pivot->note ?? ''" />
@endsection