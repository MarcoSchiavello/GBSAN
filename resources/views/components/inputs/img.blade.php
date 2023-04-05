@props([
    'name' => 'img',
    'class' => ''
])

@push('js')
    <script src="{{ asset('js/fakeUpload.js') }}" type="module"></script>
@endpush

<div fakeUpload="{!! $name !!}" class="cursor-pointer {!! $class !!}">
    <input type="file" accept="image/*" name="{!! $name !!}" realUpload="{!! $name !!}" class="hidden">
    <div class="flex items-center justify-center w-full h-full text-center">
        <img src="#" preview="{!! $name !!}" alt="preview" class="absolute hidden object-fill w-full">
        {{ $slot }}
    </div>
</div>