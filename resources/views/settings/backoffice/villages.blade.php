@extends('settings.backoffice.template')

@section('title', 'Villaggi')

@section('list')
    @foreach($villages as $village)
        <x-partials.backofficeCard 
            :name="$village->name"
            :code="$village->id" 
            put="/update/village/{{ $village->id }}"
            delete="/delete/village/{{ $village->id }}"
            :translate="false" />
    @endforeach
@endsection