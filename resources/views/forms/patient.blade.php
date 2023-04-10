@extends('forms.template')

@section('title', 'Aggiungi Paziente')

@section('form', '/add/patient')

@section('content')
    <x-inputs.img name="img" class="absolute w-48 h-48 border-2 rounded-md left-11 top-1/4 border-primary-clr">
        <p>Click per aggiungere img</p>
    </x-inputs.img>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="name" label="Nome *" />
        <x-inputs.text size="sm" name="surname" label="Cognome *" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="birthDate" label="Data Nascita *" type="date" />
        <x-inputs.select name="sex" label="Sesso *" :values="[ 'Maschio' => 'M', 'Femmina' => 'F']" />
        <x-inputs.select name="village" label="Villaggio *" :values="$villages" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="code" label="ID anagrafe" />
        <x-inputs.text size="sm" name="cell" label="Telefono" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" type="number" name="bmi" label="BMI"/>
        <x-inputs.text size="sm" type="number" name="maxPres" label="Pressione Massima" />
        <x-inputs.text size="sm" type="number" name="minPres" label="Pressione Minima" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" type="number" name="cardFreq" label="Frequenza Cardiaca" />
        <x-inputs.text size="sm" name="home" label="Casa" />
        <x-inputs.text size="sm" name="moransa" label="Moransa" />
        <x-inputs.select name="bloodType" label="Gruppo Sanguigno" :values="[   'A+' =>  'A+',
                                                                                'A-' =>  'A-',
                                                                                'B+' =>  'B+',
                                                                                'B-' =>  'B-',
                                                                                '0+' =>  '0+',
                                                                                '0-' =>  '0-',
                                                                                'AB+' => 'AB+',
                                                                                'AB-' => 'AB-' ]" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="role" label="Ruolo" />
        <x-inputs.text size="sm" type="number" name="height" label="Altezza (m)" />
        <x-inputs.text size="sm" type="number" name="weight" label="Peso (kg)" />        
    </div>
    <x-inputs.textarea size="sm" name="overview" label="Quadro Clinico" />
@endsection
