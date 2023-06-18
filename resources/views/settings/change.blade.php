@extends('settings.template')

@section('content')
    <form action="/settings/change"  class="flex flex-col items-center w-full gap-6" method="POST">
        @csrf
        @if (count($errors) > 0)
            <div class="text-err-clr">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 
        <x-inputs.text size="sm" name="name" label="Nome" :value="$user->name" />
        <x-inputs.text size="sm" name="surname" label="Cognome" :value="$user->surname" />
        <x-inputs.text size="sm" name="birthDate" type="date" label="Data di nascita" :value="$user->birth_date" />
        <x-inputs.text size="sm" name="email" type="email" label="E-mail" :value="$user->email" />
        <x-inputs.select name="sex" label="Sesso" :values="[ 'Maschio' => 'M', 'Femmina' => 'F' ]" :init="$user->sex" />
        <x-inputs.text size="sm" name="username" label="Username" :value="$user->username" />
        <x-inputs.text size="sm" name="password" type="password" label="Password" />
        <x-controls.button type="button" text="Cambia dati" />
    </form>
@endsection