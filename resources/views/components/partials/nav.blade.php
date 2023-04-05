@props([
    'auth' => Auth::check(),
    'logo' => true,
])

<div class="flex flex-row items-center justify-between w-full py-3 px-11">
    <a href="{{ !$auth ?  '/' : '/patients' }}"><img src="{{ asset('imgs/logo.png') }}" alt="logo" @class(['w-20', 'opacity-0' => !$logo])></a>

    <div class="flex flex-row justify-between gap-4 text-xl font-bold text-secondary-clr">
        @if (!$auth)
            <a href="/login"><h2 class="duration-500 ease-in-out cursor-pointer hover:text-terziary-clr transirion">Login</h2></a>
        @else
            <a href="/login"><h2 class="duration-500 ease-in-out cursor-pointer hover:text-terziary-clr transirion">Statistiche</h2></a>
            <div class="group">
                <h2 class="flex align-middle duration-500 ease-in-out cursor-pointer hover:text-terziary-clr transirion">Aggiungi <x-ri-arrow-drop-down-fill class="w-7" /></h2>
                <div class="absolute flex-col hidden gap-2 px-6 py-2 border rounded-md group-hover:flex border-secondary-clr bg-bg-clr">
                    @if (!str_contains(URL::current(), '/patient/'))
                        <a href="/add/vaccine"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Vaccino</h1></a>
                        <a href="/add/patient"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Paziente</h1></a>
                        <a href="/add/village"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Villaggio</h1></a>
                        <a href="/add/ilness"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Disturbo</h1></a>
                        <a href="/add/disease"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Malattia</h1></a>
                        <a href="/add/medicine"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Farmaco</h1></a>
                    @else
                        <a href="/patient/1/add/vaccination"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Vaccinazione</h1></a>
                        <a href="/patient/1/add/ilness"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Disturbo</h1></a>
                        <a href="/patient/1/add/disease"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Malattia</h1></a>
                        <a href="/patient/1/add/prescription"><h1 class="duration-300 cursor-pointer hover:text-terziary-clr">Prescrizione</h1></a>
                    @endif
                </div>
            </div>
            <a href="/settings/print"><h2 class="duration-500 ease-in-out cursor-pointer hover:text-terziary-clr transirion">Impostazioni</h2></a>
            <a href="/logout"><h2 class="duration-500 ease-in-out cursor-pointer hover:text-terziary-clr transirion">Logout</h2></a>
        @endif
    </div>
</div>