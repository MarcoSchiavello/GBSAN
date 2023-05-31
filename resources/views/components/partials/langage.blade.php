@push('js')
    <script>
        var url = "";

        $(".changeLang").change(function(){

            window.location.href = url + "?lang="+ $(this).val();

        });
    </script>
@endpush

<x-inputs.select 
    label="Lingua"
    :values="[
        '🇮🇹' => 'it',
        '🇬🇧' => 'en',
        '🇪🇸' => 'es',
        '🇵🇹' => 'pt'
    ]"
/>