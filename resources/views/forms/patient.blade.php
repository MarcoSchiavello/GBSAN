@extends('forms.template')

@section('title', 'Aggiungi Paziente')

@section('form', 'patient')

@section('content')
    <x-inputs.text size="sm" name="name" label="Nominativo *" />
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="birthDate" label="Data Nascita *" type="date" />
        <x-inputs.text size="sm" name="sex" label="Sesso *" />
        <x-inputs.text size="sm" name="height" label="Altezza" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="bmi" label="BMI"/>
        <x-inputs.text size="sm" name="maxPres" label="Pressione Massima" />
        <x-inputs.text size="sm" name="minPres" label="Pressione Minima" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="cardFreq" label="Frequenza Cardiaca" />
        <x-inputs.text size="sm" name="home" label="Casa" />
        <x-inputs.text size="sm" name="bloodType" label="Gruppo Sanguigno" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="village" label="Villaggio" />
        <x-inputs.text size="sm" name="role" label="Ruolo" />
    </div>
    <x-inputs.text size="sm" name="overview" label="Quadro Clinico" />
@endsection
