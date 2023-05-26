@extends('settings.backoffice.template')

@section('title', 'Medicine')

@section('list')
    @foreach($medicines as $medicine)
        <x-partials.backofficeCard 
            :name="$medicine->name"
            :code="$medicine->id" 
            put="/update/medicine/{{ $medicine->id }}"
            delete="/delete/medicine/{{ $medicine->id }}" />
    @endforeach
@endsection