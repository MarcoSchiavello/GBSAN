@props([
    'name' => 'text',
    'label' => 'Text',
    'type' => 'text',
    'step' => '.01',
    'size' => 'lg',
    'value' => '',
    'min' => '',
    'max' => '',
    'attr' => [],
    'hidden' => false
])

<div class="flex flex-col w-full gap-1 {{ $hidden ? 'hidden' : '' }}">
    <label for="{{ $name }}" class="text-{{ $size }} font-bold text-primary-clr font-subtitle-fnt">{!! $label !!}</label>
    <input 
    type="{{ $type }}" 
    min="{{ $min }}" 
    max="{{ $max }}" 
    step="{{ $step }}" 
    value="{{ $value }}" 
    name="{{ $name }}" 
    class="p-2 border-2 border-solid rounded-lg text-{{ $size }} outline-none font-subtitle-fnt bg-bg-clr border-primary-clr" 
    {{ implode(' ', array_map(
        function ($k, $v) { return $k .'='. $v .''; },
        array_keys($attr), $attr
    )) }} />
</div> 