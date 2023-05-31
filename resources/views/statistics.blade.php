@extends('template')

@section('page')
    <div class="flex flex-col justify-start w-4/5 gap-16">
        <h1 class="text-4xl font-extrabold text-terziary-clr font-title-fnt">Statistiche</h1>
        <div class="grid grid-cols-2 gap-8">
            <x-partials.graph 
                id="topDisease"
                title="Malattie più dignosticate"
                :data="$data"
                x="name"
                y="number" />
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Stats 1</h1>
                <div class="w-full h-full bg-slate-700"></div>
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Stats 1</h1>
                <div class="w-full h-full bg-slate-700"></div>
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Stats 1</h1>
                <div class="w-full h-full bg-slate-700"></div>
            </div>
        </div>
    </div>
@endsection