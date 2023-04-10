@props([
    'label' => 'select',
    'name' => 'select',
    'values' => [],
    'init' => ''
])

<div class="flex flex-col w-full gap-1 text-primary-clr">
    <label for="select" class="text-sm font-bold font-subtitle-fnt">{!! $label !!}</label>
    <select name="{!! $name !!}" class="p-2 text-sm border-2 border-solid rounded-lg outline-none font-subtitle-fnt bg-bg-clr border-primary-clr">
        @foreach($values as $key => $value)
            <option value="{!! $value !!}" @selected($value === $init)>{!! $key !!}</option>
        @endforeach
    </select>
</div>
