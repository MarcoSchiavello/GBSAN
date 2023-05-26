@extends('template')

@section('page')
    <main class="flex items-start justify-between w-10/12 h-[74vh]">
        <x-partials.settingsSidebar/>
        <div class="box-border flex flex-col items-center w-full h-full gap-6 pr-5 overflow-auto pl-9">
            @yield('content')
        </div>
    </main>
@endsection
