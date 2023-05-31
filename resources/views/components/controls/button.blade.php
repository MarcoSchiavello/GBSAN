@props([
    'text' => 'text',
    'action' => '#',
    'type' => 'a',
    'class' => '',
    'fit' => false,
    'color' => 'primary',
    'attr' => [],
    'realBtn' => false,
    'translate' => true
])

<{{ $type }} {{ $realBtn ? 'type=button' : '' }} {{ implode(' ', array_map(
    function ($k, $v) { return $k .'='. $v .''; },
    array_keys($attr), $attr
)) }} class="{{ !$translate ? 'notranslate' : '' }} font-bold border-none rounded-md outline-none bg-{{ $color }}-clr h-max {{ !$fit ? 'px-7 py-2' : 'p-1'  }} text-bg-clr {{ $class }} font-subtitle-fnt flex items-center justify-center" href="{{ $action }}">
    {!! $slot->isNotEmpty() ? $slot : $text !!}
</{{ $type }}>