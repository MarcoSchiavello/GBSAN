@extends('template')

@section('page')
    <div class="flex items-start w-4/5 gap-12">
        <div class="flex items-center justify-center w-1/2">     
            <img class="max-w-xs rounded-xl" src="{{ asset('imgs/flag.png') }}" alt="Guinea bissau flag">
        </div>
        <div class="flex flex-col items-start justify-center w-1/2 gap-3">     
            <h1 class="text-3xl font-bold text-terziary-clr font-title-fnt">Ospedale&nbsp;<span class="notranslate">Giuseppe Valsavoia</span></h1>
            <p class="text-lg text-justify font-text-fnt">
                Benvenuti, questo sito è stato ideato per la gestione dell'ospedale in modo digitale, sviluppato dagli studenti della Scuola
                <span class="notranslate">Amedeo Avogadro di Torino (IT)</span>&nbsp;in collaborazione con un'organizzazione no-profit&nbsp;<span class="notranslate">Abala lite</span>&nbsp;per
                migliorare la qualità della salute in&nbsp;<span class="notranslate">Guinea Bissau</span>.<br><br>

                Il nostro obiettivo è stato quello di digitalizzare i registri cartacei delle malattie e dei 
                pazienti dell'ospedale per creare una visione più completa e precisa della situazione sanitaria 
                locale da parte dell'Organizzazione Mondiale della Sanità. Inoltre, abbiamo sviluppato una 
                piattaforma user-friendly e facilmente accessibile per l'ospedale e gli operatori sanitari 
                locali per facilitare il processo di digitalizzazione.
            </p>
        </div>
    </div>

    <div class="flex flex-col items-center w-2/3 gap-10">
        <h1 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">Enti coinvolti</h1>
        <div class="flex items-center justify-between w-full">
            <a href="https://www.abalalite.it/"><img class="w-32" src="{{ asset('imgs/onlus.png') }}" alt="onlus"></a>
            <a href="https://www.sito.itisavogadro.org/"><img class="w-32" src="{{ asset('imgs/avogadro.png') }}" alt="avogadro"></a>
            <a href="https://www.abalalite.it/"><img class="w-32" src="{{ asset('imgs/abalite.png') }}" alt="abalite"></a>
        </div>
    </div>
@endsection