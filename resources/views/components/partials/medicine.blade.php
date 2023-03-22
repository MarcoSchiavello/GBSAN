@props([
    'title' => true,
])

<div class="flex flex-col items-center w-full gap-4">
    @if ($title)
        <h1 class="text-2xl font-bold text-secondary-clr font-title-fnt">Farmaci</h1>
    @endif
    <div class="flex w-full gap-4">
        <x-inputs.text size="sm" name="medicine" label="Farmaco *" />
        <x-inputs.text size="sm" name="dosage" label="Doaggio *" type="number" />
    </div>
    <div class="flex w-full gap-4">
        <x-inputs.text size="sm" name="when" label="Quando *" />
        <x-inputs.text size="sm" name="startDate" label="Data inizio *" />
        <x-inputs.text size="sm" name="endDate" label="Data fine *" />
    </div>

    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="39" height="39" rx="19.5" class="fill-secondary-clr"/>
        <rect x="16.3799" y="7.80005" width="6.24" height="23.4" rx="3.12" class="fill-bg-clr"/>
        <rect x="7.7998" y="22.6201" width="6.24" height="23.4" rx="3.12" transform="rotate(-90 7.7998 22.6201)" class="fill-bg-clr"/>
    </svg>
</div>