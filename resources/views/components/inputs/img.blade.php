@props([
    'name' => 'img',
    'class' => '',
    'value' => '',
    'init' => ''
])

@push('js')
    <script src="{{ asset('js/fakeUpload.js') }}" type="module"></script>
@endpush

<div fakeUpload="{!! $name !!}" class="cursor-pointer {!! $class !!}">
    <input type="file" accept="image/*" name="{!! $name !!}" realUpload="{!! $name !!}" class="hidden">
    <div class="flex items-center justify-center w-full h-full text-center">
        <img preview="{!! $name !!}" alt="preview" class="absolute hidden object-cover w-full h-full" src="#" init="{!! $init !!}">
        {{ $slot }}
    </div>
</div>