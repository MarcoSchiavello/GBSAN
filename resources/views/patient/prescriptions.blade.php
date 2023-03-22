@extends('patient.template')

@section('list')
    <x-partials.prescriptionPopup />
    @for ($i = 0; $i < 5; $i++)
        <x-partials.patientCard>
            <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">12/10/2020</h3>
            
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
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Prescrizione</h1>
                <h3 class="font-text-fnt">
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                </h3>
            </div>

            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Riscontri</h1>
                <div class="flex items-center gap-4">
                    @for ($j = 0; $j < 10; $j++)
                        <div class="w-20 h-32 bg-black"></div>
                    @endfor
                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="39" height="39" rx="19.5" class="fill-secondary-clr"/>
                        <rect x="16.3799" y="7.80005" width="6.24" height="23.4" rx="3.12" class="fill-bg-clr"/>
                        <rect x="7.7998" y="22.6201" width="6.24" height="23.4" rx="3.12" transform="rotate(-90 7.7998 22.6201)" class="fill-bg-clr"/>
                    </svg>
                </div>
            </div>
        </x-partials.patientCard>
    @endfor
    @for ($i = 0; $i < 5; $i++)
        <x-partials.patientCard>
            <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">12/10/2020</h3>
            
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Prescrizione</h1>
                <h3 class="font-text-fnt">
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                    dsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadaddsadadadsadadad
                </h3>
            </div>

            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Riscontri</h1>
                <div class="flex items-center gap-4">
                    @for ($j = 0; $j < 10; $j++)
                        <div class="w-20 h-32 bg-black"></div>
                    @endfor
                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="39" height="39" rx="19.5" class="fill-secondary-clr"/>
                        <rect x="16.3799" y="7.80005" width="6.24" height="23.4" rx="3.12" class="fill-bg-clr"/>
                        <rect x="7.7998" y="22.6201" width="6.24" height="23.4" rx="3.12" transform="rotate(-90 7.7998 22.6201)" class="fill-bg-clr"/>
                    </svg>
                </div>
            </div>
        </x-partials.patientCard>
    @endfor
@endsection