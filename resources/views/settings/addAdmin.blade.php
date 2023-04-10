@extends('settings.template')

@section('content')
    <form action="/settings/addop" class="flex flex-col items-center w-full gap-6" method="POST">
        @csrf
        <x-inputs.text size="sm" name="name" label="Nome" />
        <x-inputs.text size="sm" name="surname" label="Cognome" />
        <x-inputs.text size="sm" name="birthDate" type="date" label="Data di nascita" />
        <x-inputs.text size="sm" name="email" type="email" label="E-mail" />
        <x-inputs.select name="sex" label="Sesso" :values="[ 'Maschio' => 'M', 'Femmina' => 'F' ]" />
        <x-inputs.text size="sm" name="username" label="Username" />
        <x-inputs.text size="sm" name="password" label="Password" type="password" />
        <x-controls.button type="button" text="Aggiungi" />
    </form>
@endsection