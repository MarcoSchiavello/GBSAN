@push('js')
    <script src="{{ asset('js/medicineComp.js') }}" type="module"></script>
@endpush

<div class="flex flex-col items-center w-full gap-4">
    @if ($title)
        <h1 class="text-2xl font-bold text-secondary-clr font-title-fnt">Farmaci</h1>
    @endif
    
    <div medicine-list class="flex flex-col w-full">
        <div template class="hidden py-5 border-b-2 border-primary-clr">
            <div class="flex w-full gap-4">
                <x-inputs.select name="medicine[]" label="Farmaco *" :values="$medicines" />
                <x-inputs.text size="sm" name="dosage[]" label="Doaggio *" type="number" />
            </div>
            <div class="flex w-full gap-4">
                <x-inputs.text size="sm" name="when[]" label="Quando *" />
                <x-inputs.text size="sm" type="date" name="startDate[]" label="Data inizio *" />
                <x-inputs.text size="sm" type="date" name="endDate[]" label="Data fine *" />
            </div>
        </div>
    </div>
    

    <svg add width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="39" height="39" rx="19.5" class="fill-secondary-clr"/>
        <rect x="16.3799" y="7.80005" width="6.24" height="23.4" rx="3.12" class="fill-bg-clr"/>
        <rect x="7.7998" y="22.6201" width="6.24" height="23.4" rx="3.12" transform="rotate(-90 7.7998 22.6201)" class="fill-bg-clr"/>
    </svg>
</div>