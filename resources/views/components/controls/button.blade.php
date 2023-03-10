@props([
    'text' => 'text',
    'action' => '#',
    'type' => 'a',
    'class' => ''
])

<{{ $type }} class="py-2 font-bold border-none rounded-md outline-none px-7 bg-primary-clr text-bg-clr {{ $class }} font-subtitle-fnt flex items-center justify-center" href="{{ $action }}">
    {!! $text !!}
</{{ $type }}>