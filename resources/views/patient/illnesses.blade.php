@extends('patient.template')

@section('list')
    @for ($i = 0; $i < 10; $i++)
        <x-partials.patientCard>
            <div class="flex items-baseline gap-4">
                <h1 class="text-3xl font-bold text-terziary-clr font-title-fnt">Nome Disturbo</h1>
                <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">12/10/2020</h3>
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Osservazioni</h1>
                <h3 class="font-text-fnt">
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                </h3>
            </div>
        </x-partials.patientCard>
    @endfor
@endsection