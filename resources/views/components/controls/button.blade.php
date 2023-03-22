@props([
    'text' => 'text',
    'action' => '#',
    'type' => 'a',
    'class' => '',
    'fit' => false,
    'color' => 'primary'
])

<{{ $type }} class=" font-bold border-none rounded-md outline-none h-max {{ !$fit ? 'px-7 py-2' : 'p-1'  }} bg-{{ $color }}-clr text-bg-clr {{ $class }} font-subtitle-fnt flex items-center justify-center" href="{{ $action }}">
    {!! $slot->isNotEmpty() ? $slot : $text !!}
</{{ $type }}>