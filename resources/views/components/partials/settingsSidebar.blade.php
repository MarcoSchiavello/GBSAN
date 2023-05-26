<div class="box-border flex flex-col h-full gap-10 px-3 py-8 pr-8 border-r-2 w-80 h- text-secondary-clr border-secondary-clr">
    <a href="/settings/print" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/print')])>Schema stampa</a>
    <a href="/settings/change" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/change')]) >Cambia dati utenti</a>
    <a href="/settings/addop" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/addop')]) >Aggiungi operatore</a>
    <a href="/view/villages" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/villages')]) >Lista villaggi</a>
    <a href="/view/illnesses" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/illnesses')]) >Lista disturbi</a>
    <a href="/view/diseases" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/diseases')]) >Lista malattie</a>
    <a href="/view/medicines" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/medicines')]) >Lista medicinali</a>
    <a href="/view/vaccines" @class(['text-lg', 'break-normal', 'text-primary-clr' => str_contains(URL::current(), '/vaccines')]) >Lista vaccini</a>
</div>
