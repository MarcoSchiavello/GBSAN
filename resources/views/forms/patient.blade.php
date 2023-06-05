@extends('forms.template')

@section('title')
    {{ isset($patient) ? 'Aggiorna' : 'Aggiungi' }} Paziente &nbsp;{{ $patient->name . ' ' . $patient->surname }}
@endsection

@section('form', isset($patient) ? '/update/patient/' . $patient->id : '/add/patient')

@section('content')
    <x-inputs.img name="img" :init="isset($patient) ? asset($patient->img) : ''" class="absolute w-48 h-48 border-2 rounded-md left-11 top-1/4 border-primary-clr" >
        <p clear="img">Click per aggiungere img</p>
    </x-inputs.img>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="name" label="Nome *" :value="isset($patient) ? $patient->name : ''" />
        <x-inputs.text size="sm" name="surname" label="Cognome *" :value="isset($patient) ? $patient->surname : ''" />
        <x-inputs.text size="sm" name="birthDate" label="Data Nascita *" type="date" :value="isset($patient) ? $patient->birth_date : ''" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="moranca" label="Moranca *" :value="isset($patient) ? $patient->moranca : ''" />
        <x-inputs.select name="sex" label="Sesso *" :init="isset($patient) ? $patient->sex : ''" :values="[ 'Maschio' => 'M', 'Femmina' => 'F']" />
        <x-inputs.select name="village" label="Villaggio *" :init="isset($patient) ? $patient->village : ''" :values="$villages" :translate="false" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="code" label="Identificativo anagrafe" :value="isset($patient) ? $patient->code : ''" />
        <x-inputs.text size="sm" name="cell" label="Telefono" :value="isset($patient) ? $patient->cell : ''" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" type="number" name="bmi" label="BMI" :value="isset($patient) ? $patient->bmi : ''" />
        <x-inputs.text size="sm" type="number" name="maxPres" label="Pressione Massima" :value="isset($patient) ? $patient->max_press : ''" />
        <x-inputs.text size="sm" type="number" name="minPres" label="Pressione Minima" :value="isset($patient) ? $patient->min_press : ''" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" type="number" name="cardFreq" label="Frequenza Cardiaca" :value="isset($patient) ? $patient->freq_card : ''" />
        <x-inputs.text size="sm" name="home" label="Casa" :value="isset($patient) ? $patient->home : ''" />
        <x-inputs.select name="bloodType" label="Gruppo Sanguigno" :values="[   'A+' =>  'A+',
                                                                                'A-' =>  'A-',
                                                                                'B+' =>  'B+',
                                                                                'B-' =>  'B-',
                                                                                '0+' =>  '0+',
                                                                                '0-' =>  '0-',
                                                                                'AB+' => 'AB+',
                                                                                'AB-' => 'AB-' ]" :init="isset($patient) ? $patient->blood_type : ''" :translate="false" />
    </div>
    <div class="flex justify-between w-full gap-3">
        <x-inputs.text size="sm" name="role" label="Ruolo" :value="isset($patient) ? $patient->role : ''" />
        <x-inputs.text size="sm" type="number" name="height" label="Altezza (m)" :value="isset($patient) ? $patient->height : ''" />
        <x-inputs.text size="sm" type="number" name="weight" label="Peso (kg)" :value="isset($patient) ? $patient->weight : ''" />        
    </div>
    <x-inputs.textarea size="sm" name="overview" label="Quadro Clinico" :value="isset($patient) ? $patient->overview : ''" />
@endsection
