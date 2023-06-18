@props([
    'patient'
])

<div class="flex justify-between">
    <div class="flex items-baseline gap-3">
        <img class="object-cover w-16 h-16" src="{{ asset($patient->img) }}">
        <h1 class="text-5xl font-bold text-terziary-clr font-title-fnt">{!! $patient->name . ' ' . $patient->surname !!}</h1>
    </div>
    <div class="flex gap-3">
        <x-controls.button type="a" action="/update/patient/{!! $patient->id !!}" :fit="true" ><x-ri-pencil-line class="w-14 fill-bg-clr" /></x-controls.button>
        <x-controls.button type="button" :attr="[ 'delete' => '/delete/patient/' . $patient->id, 'token' => csrf_token() ]" :fit="true" ><x-ri-delete-bin-5-line class="w-14 fill-bg-clr" /></x-controls.button>
    </div>
</div>

<div class="flex flex-col h-[4.8rem] gap-1">
    <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Identificativo anagrafe</h2>
    <h3 class="text-xl font-bold font-text-fnt notranslate">{!! $patient->code === null ? 'Non inserito' : $patient->code !!}</h3>
</div>

<div class="grid grid-cols-3">
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Data di nascita</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! (new DateTime($patient->birth_date))->format('d/m/Y') !!}</h3>
    </div>
    
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Telefono</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->cell === null ? 'Non inserito' : $patient->cell !!}</h3>
    </div>
    
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Sesso</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->sex === 'M' ? 'Maschio' : 'Femmina' !!}</h3>
    </div>
    
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Gruppo sanguigno</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->blood_type === null ? 'Non inserito' : $patient->blood_type !!}</h3>
    </div>
    
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Villagio</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->village->name !!}</h3>
    </div>
    
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Casa</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->home === null ? 'Non inserito' : $patient->home !!}</h3>
    </div>
    
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Morança</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->moranca === null ? 'Non inserito' : $patient->moranca !!}</h3>
    </div>
    
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Altezza</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->height === null ? 'Non inserito' : $patient->height !!}</h3>
    </div>

    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Peso</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->weight === null ? 'Non inserito' : $patient->weight !!}</h3>
    </div>
    
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">BMI</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->bmi === null ? 'Non inserito' : $patient->bmi !!}</h3>
    </div>

    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Pressione Max</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->press_max === null ? 'Non inserito' : $patient->press_max !!}</h3>
    </div>

    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Pressione Min</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->press_min === null ? 'Non inserito' : $patient->press_min !!}</h3>
    </div>

    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Frequenza cardiaca</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->freq_card === null ? 'Non inserito' : $patient->freq_card !!}</h3>
    </div> 

    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Ruolo</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->role === null ? 'Non inserito' : $patient->role !!}</h3>
    </div>
    
    <div class="flex flex-col h-[4.8rem] gap-1">
        <h2 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Quadro clinico</h2>
        <h3 class="text-xl font-bold font-text-fnt">{!! $patient->overview === null ? 'Non inserito' : $patient->overview !!}</h3>
    </div>
</div>

<div class="flex flex-col justify-end text-primary-clr">
    <h4>Aggiunto da {!! Auth::user()->username !!}</h4>
    <h4>Ultima modifica {!! (new DateTime($patient->last_modified))->format('d/m/Y H:i:s') !!}</h4>
</div>