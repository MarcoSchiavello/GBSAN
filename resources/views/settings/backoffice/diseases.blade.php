@extends('settings.backoffice.template')

@section('title', 'Malattie')

@section('list')
    @foreach($diseases as $disease)
        <x-partials.backofficeCard 
            :name="$disease->name"
            :code="$disease->id" 
            put="/update/disease/{{ $disease->id }}"
            delete="/delete/disease/{{ $disease->id }}" />
    @endforeach
@endsection