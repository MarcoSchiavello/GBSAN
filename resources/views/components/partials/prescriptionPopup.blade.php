@props([
    'action',
    'patient',
])

@push('js')
    <script src="{{ asset('js/popUpManager.js') }}" type="module"></script>
    <script src="{{ asset('js/prescriptionPopUp.js') }}" type="module"></script>
    <script src="{{ asset('js/fakeUpload.js') }}" type="module"></script>
@endpush

<div pop-up="addDocument" class="fixed top-0 left-0 z-30 items-center justify-center hidden w-full h-full bg-black bg-opacity-75">
    <form action="/patient/{{ $patient }}/add/prescription/|||prescription|||/document" pup-up-form method="POST" class="relative flex flex-col max-w-lg gap-8 p-16 bg-bg-clr" enctype="multipart/form-data">
        @csrf
        <x-ri-close-fill class="absolute w-10 fill-text-clr top-4 right-4" close-pop-up />
        <input type="file" name="file" realUpload="file" class="hidden" />
        <h1 class="m-auto text-3xl font-bold text-terziary-clr font-title-fnt">Aggiungi riscontri</h1>
        <h3 class="text-xl font-bold font-text-fnt">Nome file: <span fileName="file"></span></h3>
        <div class="flex justify-between gap-8">
            <x-controls.button type="button" text="Carica" color="secondary" />
            <x-controls.button type="button" text="Aggiungi" :realBtn="true" :attr="[ 'fakeUpload' => 'file' ]" />
        </div>
    </form>
</div>