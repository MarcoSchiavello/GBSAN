@extends('settings.template')

@section('content')
    <form action="/settings/addop" class="flex flex-col items-center w-full gap-6" method="POST">
        @csrf
        <x-inputs.text size="sm" name="name" label="Nominativo" />
        <x-inputs.text size="sm" name="birthDate" label="Data di nascita" />
        <x-inputs.text size="sm" name="username" label="Username" />
        <x-inputs.text size="sm" name="password" label="Password" />
        <x-controls.button type="button" text="Aggiungi" />
    </form>
@endsection