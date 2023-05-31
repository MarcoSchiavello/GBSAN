@props([
    'id',
    'title' => 'stats',
    'type' => 'bar',
    'data',
    'x',
    'y',
    'label' => '',
])

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="module">
        const data = {!! json_encode($data) !!};

        new Chart(
            document.getElementById('{!! $id !!}'),
            {
            type: '{!! $type !!}',
            data: {
                labels: data.map(row => row.{!! $x !!}),
                datasets: [
                    {
                        label: '{!! $label !!}',
                        data: data.map(row => row.{!! $y !!})
                    }
                ]
            }
            }
        );
    </script>
@endpush

<div>
    <h1 class="text-2xl font-bold text-primary-clr font-subtitle-fnt">{!! $title !!}</h1>
    <div class="w-full h-full">
        <canvas id="{!! $id !!}"></canvas>
    </div>
</div> 