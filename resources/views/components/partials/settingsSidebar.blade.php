<div class="box-border flex flex-col h-full gap-10 px-3 py-8 pr-8 border-r-2 w-80 h- text-secondary-clr border-secondary-clr">
    <a href="/settings/print" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/print')])>Schema stampa</a>
    <a href="/settings/change" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/change')]) >Cambia dati utenti</a>
    <a href="/settings/addop" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/addop')]) >Aggiungi operatore</a>
</div>
