@extends('settings.template')

@push('js')
    <script src="{{ asset('js/requests.js') }}" type="module"></script>
@endpush

@section('content')
    <h1 class="text-3xl font-bold text-primary-clr font-title-fnt">@yield('title')</h1>
    <div class="flex flex-col w-full gap-6">
        <x-partials.searchBar />
        
        @yield('list')
    </div>
@endsection
