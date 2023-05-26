@extends('settings.backoffice.template')

@section('title', 'Vaccini')

@section('list')
    @foreach($vaccines as $vaccine)
        <x-partials.backofficeCard 
            :name="$vaccine->name"
            :code="$vaccine->id" 
            put="/update/vaccine/{{ $vaccine->id }}"
            delete="/delete/vaccine/{{ $vaccine->id }}" />
    @endforeach
@endsection