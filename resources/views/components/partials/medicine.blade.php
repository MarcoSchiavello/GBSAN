@props([
    'title' => true,
])

<div>
    {{ $title ? '<h1>Farmaci</h1>' : '' }}
    <div class="flex gap-4">
        <x-inputs.text size="sm" name="medicine" label="Farmaco *" />
        <x-inputs.text size="sm" name="dosage" label="Doaggio *" type="number" />
    </div>
    <div class="flex gap-4">
        <x-inputs.text size="sm" name="when" label="Quando *" />
        <x-inputs.text size="sm" name="startDate" label="Data inizio *" />
        <x-inputs.text size="sm" name="endDate" label="Data fine *" />
    </div>
</div>