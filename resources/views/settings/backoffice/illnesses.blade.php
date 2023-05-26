@extends('settings.backoffice.template')

@section('title', 'Disturbi')

@section('list')
    @foreach($illnesses as $illness)
        <x-partials.backofficeCard 
            :name="$illness->name"
            :code="$illness->id" 
            put="/update/illness/{{ $illness->id }}"
            delete="/delete/illness/{{ $illness->id }}" />
    @endforeach
@endsection