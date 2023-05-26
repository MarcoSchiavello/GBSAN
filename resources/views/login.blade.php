@extends('template')

@section('class', 'flex flex-col min-h-screen')
@section('page')
    <form action="/login" method="POST" class="flex flex-col items-center justify-center w-1/5 h-full gap-10 m-auto">
        @csrf
        <img class="w-44 rounded-xl" src="{{ asset('imgs/logo.png') }}" alt="GBSAN logo">
        <x-inputs.text name="username" label="Username" />
        <x-inputs.text name="password" label="Password" type="password" />
        <x-controls.button text="Accedi" type="button" />
    </form>
@endsection