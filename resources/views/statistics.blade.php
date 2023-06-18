@extends('template')

@section('page')
    <div class="flex flex-col justify-start w-4/5 gap-16">
        <h1 class="text-4xl font-extrabold text-terziary-clr font-title-fnt">Statistiche</h1>
        <div class="grid grid-cols-2 gap-8">
            <x-partials.graph 
                id="topDiseases"
                title="Malattie più dignosticate"
                :data="$topDiseases"
                x="name"
                y="number"
                label="Número de pessoas doentes / Numero di malati" />
            
            <x-partials.graph 
                id="topIllnesses"
                title="Disturbi più dignosticati"
                :data="$topIllnesses"
                x="name"
                y="number"
                label="Número de diagnóstico / Numero di diagnosi" />
            
            <x-partials.graph 
                id="topVaccines"
                title="Vaccini più somministrati"
                :data="$topVaccines"
                x="name"
                y="number" 
                label="Número de inoculações / Numero di inoculazioni" />
            
            <x-partials.graph 
                id="topMedicines"
                title="Medicine piu prescritte"
                :data="$topMedicines"
                x="name"
                y="number"
                label="Número de prescrições / Numero di prescrizioni" />

            <x-partials.graph 
                id="ratio"
                title="Rapporto Donne/Uomini malati"
                :data="$ratio"
                type="pie"
                x="name"
                y="number" 
                :colors="[ 'pink', 'blue']"
                class="h-[372px]"/>

            <x-partials.graph 
                id="topMorances"
                title="Morance con più malati"
                :data="$topMorances"
                x="name"
                y="number"
                label="Número de doenças e distúrbios registrados / Numero di Malattie e Distubi registarati" />
        </div>
    </div>
@endsection