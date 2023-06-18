@props([
    'name' => '',
    'code' => '',
    'put' => '',
    'delete' => '',    
])

<div class="flex items-center justify-between w-full px-6 py-3 border-2 border-primary-clr rounded-xl" search-item>
    <div class="flex gap-5">
        <h1 class="text-2xl font-bold font-title-fnt text-terziary-clr notranslate">{!! $name !!}</h1>
        <h3 class="text-xl font-bold font-subtitle-fnt text-primary-clr notranslate">{!! $code !!}</h3>
    </div>

    <div class="flex gap-7">
        <x-controls.button type="a" :fit="true" :action="$put"><x-ri-pencil-line class="w-10 fill-bg-clr" /></x-controls.button>
        <x-controls.button type="button" color="primary" :fit="true" :attr="[ 'delete' => $delete, 'token' => csrf_token() ]"><x-ri-delete-bin-5-line class="w-10 fill-bg-clr" /></x-controls.button>
    </div>
</div>