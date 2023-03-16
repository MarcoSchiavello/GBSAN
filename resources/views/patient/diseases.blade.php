@extends('patient.template')

@section('list')
    @for ($i = 0; $i < 10; $i++)
        <x-partials.patientCard>
            <div class="flex items-baseline gap-4">
                <h1 class="text-3xl font-bold text-terziary-clr font-title-fnt">Nome Malattia</h1>
                <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">12/10/2020</h3>
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Medicine</h1>
                <div class="flex [&>:not(:last-child)]:border-r-2 [&>:not(:last-child)]:border-primary-clr">
                    <div class="flex flex-col items-center px-5">
                        <h3>Medicina1</h3>
                        <div class="flex gap-4">
                            <h4 class="flex gap-1">3 <x-fas-utensil-spoon class="w-6 fill-text-clr"/></h4>
                            <h4 class="flex gap-1">15:50 <x-ri-sun-line class="w-6 fill-text-clr"/></h4>
                        </div>
                    </div>
                    <div class="flex flex-col items-center px-5">
                        <h3>Medicina1</h3>
                        <div class="flex gap-4">
                            <h4 class="flex gap-1">3 <x-fas-utensil-spoon class="w-6 fill-text-clr"/></h4>
                            <h4 class="flex gap-1">15:50 <x-ri-moon-line class="w-6 fill-text-clr"/></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Osservazioni</h1>
                <h3 class="font-text-fnt">dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                </h3>
            </div>
        </x-partials.patientCard>
    @endfor
@endsection