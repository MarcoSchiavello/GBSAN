@props([
    "user" => "none"
])

<div class="relative flex flex-col w-full gap-4 p-10 border-2 rounded-lg border-primary-clr">
    <h4 class="absolute text-sm font-bold top-5 right-20 text-primary-clr font-subtitle-fnt">Aggiunto da {!! $user !!}</h4>
    <div class="absolute flex flex-col gap-3 top-2 right-2">
        <x-controls.button type="button" :fit="true" ><x-ri-printer-line class="w-10 fill-bg-clr" /></x-controls.button>
        <x-controls.button type="button" :fit="true" ><x-ri-pencil-line class="w-10 fill-bg-clr" /></x-controls.button>
        <x-controls.button type="button" :fit="true" ><x-ri-delete-bin-5-line class="w-10 fill-bg-clr" /></x-controls.button>
    </div>

    {!! $slot !!}
</div>