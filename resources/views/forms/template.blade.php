@extends('template')

@section('page')
    <form action="@yield('form')" method="POST" class="flex flex-col items-start justify-between w-2/3 gap-4 mb-6" enctype="multipart/form-data">
        @method(str_contains(URL::current(), '/update/') ? 'PUT' : 'POST')
        @csrf
        <h1 class="m-auto text-3xl font-bold text-terziary-clr font-title-fnt">@yield('title')</h1>
        
        @if (count($errors) > 0)
            <div class="text-err-clr">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        
        @yield('content')
        <x-controls.button text="{!! str_contains(URL::current(), '/update/') ? 'Cambia' : 'Aggiungi' !!}" type="button" class="m-auto mt-3" />
    </form>
@endsection