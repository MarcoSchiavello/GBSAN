@extends('forms.template')

@section('title', 'Aggiungi Paziente')

@section('form', '/add/patient')

@section('content')
    <div class="absolute flex items-center justify-center w-48 h-48 p-10 text-center border-2 rounded-md left-11 top-1/4 border-primary-clr">
        clic per aggiungere img
    </div>
    <x-inputs.text size="sm" name="name" label="Nominativo *" />
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="id" label="ID anagrafe" />
        <x-inputs.text size="sm" name="phone" label="Telefono" />
    </div>
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
