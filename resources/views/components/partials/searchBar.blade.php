@push('js')
    <script src="{{ asset('js/search.js') }}" type="module"></script>
@endpush

<div class="flex items-center justify-start h-12 bg-transparent border-2 rounded-lg border-primary-clr">
    <div class="grid w-12 h-full place-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-primary-clr" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </div>

    <input
        class="w-full pr-2 bg-transparent outline-none text-md text-text-clr"
        type="text"
        placeholder="Cerca..."
        search /> 
</div>