<h2 class="mb-2 text-2xl font-bold text-primary-clr">Filtri</h2>
<form action="{{ URL::current() }}" method="GET" class="flex flex-col justify-start w-full align-top gap-7">
    @csrf
    <div class="grid w-full grid-flow-row-dense grid-cols-6 gap-2">
        <x-inputs.text label="Nome" name="name" size="sm" :value="$default['name'] ?? ''" />
        <x-inputs.text label="Cognome" name="surname" size="sm" :value="$default['surname'] ?? ''" />
        <x-inputs.text label="Data di nascita" name="birthDate" type="date" size="sm" :value="$default['birthDate'] ?? ''" />
        <x-inputs.select label="Gruppo sanguigno" name="bloodType" size="sm" :values="[   
            'Qualsiasi' =>  '',
            'A+' =>  'A+',
            'A-' =>  'A-',
            'B+' =>  'B+',
            'B-' =>  'B-',
            '0+' =>  '0+',
            '0-' =>  '0-',
            'AB+' => 'AB+',
            'AB-' => 'AB-' ]" :init="$default['bloodType'] ?? ''" />
        <x-inputs.select label="Villagio" name="villages" size="sm" :values="collect($villages)->prepend('','Qualsiasi')->all()" :init="$default['village'] ?? ''" />
        <x-inputs.text label="Eta" name="age" type="number" size="sm" :value="$default['age'] ?? ''" />
        <x-inputs.select label="Sesso" size="sm" name="sex" :values="[ 'Qualsiasi' =>  '', 'Maschio' => 'M', 'Femmina' => 'F']" :init="$default['sex'] ?? ''" />
    </div>

    <div class="flex gap-7">
        <x-controls.button text="Filtra" type="button" />
        <x-controls.button text="Pulisci" type="a" action="/patients" color="secondary" />
    </div>
</form>
