@extends('patient.template')

@push('js')
    <script type="module" src="{{ asset('js/download.js') }}"></script>
@endpush

@section('list')
    <x-partials.prescriptionPopup :patient="$patient->id"/>
    @foreach($patient->prescriptions as $prescription)
        <x-partials.patientCard delete="/patient/{{ $patient->id }}/delete/prescription/{{ $prescription->id }}" 
                                :user="$prescription->user->username"
                                put="/patient/{{ $patient->id }}/update/prescription/{{ $prescription->id }}"
                                print="/patient/{{ $patient->id }}/print/prescription/{{ $prescription->id }}">
            <h3 class="text-lg font-bold text-primary-clr font-subtitle-fnt">{!! (new DateTime($prescription->date))->format('d/m/Y') !!}</h3>
            
            @if(!empty($prescription->medicines))
                <div>
                    <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Medicine</h1>
                    <div class="flex [&>:not(:last-child)]:border-r-2 [&>:not(:last-child)]:border-primary-clr">
                        @foreach($prescription->medicines as $medicine)
                            <div class="flex flex-col items-center px-5">
                                <h3 class="text-secondary-clr font-subtitle-fnt text-[1.2rem] notranslate">{!! $medicine->name !!}</h3>
                                <div class="flex gap-4">
                                    <h4 class="flex gap-1">{!! $medicine->pivot->quantity !!} <x-fas-utensil-spoon class="w-6 fill-text-clr"/></h4>
                                    <h4 class="flex gap-1">{!! $medicine->pivot->when !!} @if(intval(explode(':',$medicine->pivot->when)[0]) > 20) <x-ri-moon-line class="w-6 fill-text-clr"/> @else <x-ri-sun-line class="w-6 fill-text-clr"/> @endif</h4>
                                </div>
                                <h3 class="mt-3">Inizio: {!! (new DateTime($medicine->pivot->start_date))->format('d/m/Y') !!}</h3>
                                <h3>Fine: {!! (new DateTime($medicine->pivot->end_date))->format('d/m/Y') !!}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            
            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Prescrizione</h1>
                <h3 class="font-text-fnt notranslate">
                    {!! $prescription->prescription !!}
                </h3>
            </div>

            <div>
                <h1 class="text-xl font-bold text-primary-clr font-subtitle-fnt">Riscontri</h1>
                <div class="flex flex-wrap items-center gap-4">
                    @foreach ($prescription->documents as $document)
                        <div class="relative flex items-center justify-center w-24 h-32 transition-all bg-black bg-opacity-75 border-2 border-black group hover:w-52">
                            <x-ri-file-2-fill class="w-10 fill-bg-clr group-hover:hidden" />
                            
                            <div class="flex-col items-center justify-center hidden w-0 h-full gap-3 transition-all group-hover:w-full group-hover:px-6 group-hover:flex">
                                <p class="font-bold text-md font-text-fnt text-bg-clr notranslate">{!! basename($document->document) !!}</p>
                                <div class="flex gap-3">
                                    <x-controls.button type="button" :fit="true" :attr="['download' => asset($document->document), 'downloadName' => basename($document->document)]"><x-ri-download-line class="w-6 fill-bg-clr" /></x-controls.button>
                                    <x-controls.button type="button" :fit="true" :attr="['delete' => '/patient/' . $patient->id . '/prescription/' . $prescription->id . '/delete/document/' . $document->id, 'token' => csrf_token() ]"><x-ri-delete-bin-5-line class="w-6 fill-bg-clr" /></x-controls.button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <svg trigger="addDocument" prescription-trigger="{{ $prescription->id }}" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="39" height="39" rx="19.5" class="fill-secondary-clr"/>
                        <rect x="16.3799" y="7.80005" width="6.24" height="23.4" rx="3.12" class="fill-bg-clr"/>
                        <rect x="7.7998" y="22.6201" width="6.24" height="23.4" rx="3.12" transform="rotate(-90 7.7998 22.6201)" class="fill-bg-clr"/>
                    </svg>
                </div>
            </div>
        </x-partials.patientCard>
    @endforeach
@endsection