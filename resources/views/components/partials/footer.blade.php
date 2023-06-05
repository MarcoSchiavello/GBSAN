

<footer class="w-full text-center bg-primary-clr">
    <div class="flex items-center justify-center p-6 border-b-2 border-secondary-clr">
        <div class="flex items-center w-9/12 justify-evenly">
            <a href=""><img class="h-20" src="{{ asset('imgs/onlus.png') }}" alt="onlus"></a>
            <a href=""><img class="h-20" src="{{ asset('imgs/avogadro.png') }}" alt="avogadro"></a>
            <a href=""><img class="h-20" src="{{ asset('imgs/abalite.png') }}" alt="abalite"></a>
        </div>
    </div>

    <div class="flex justify-center py-10 mx-6">
        <div class="flex w-full justify-evenly">
            <div class="flex flex-col items-start gap-5">
                <h6 class="text-xl font-extrabold font-title-fnt text-terziary-clr">ABOUT</h6>
                <p class="text-justify w-96 text-bg-clr font-text-fnt">
                    Applicativo per la gestione dell'ospedale digitale sviluppato dagli studenti della Scuola 
                    Amedeo Avogadro di Torino (IT) in collaborazione con un'organizzazione no-profit Abala lite
                    per migliorare la qualità della salute in Guinea Bissau.
                </p>
            </div>

            <div class="flex flex-col items-start gap-5">
                <h6 class="text-xl font-extrabold font-title-fnt text-terziary-clr">CONTACT</h6>
                <div class="flex flex-col items-start justify-center gap-3">
                    
                </div>
            </div>
        </div>
    </div>

    <div id="google_translate_element"></div>
    <script type="text/javascript" type="module">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'it'},
                'google_translate_element'
            );
        }
    </script>
    
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</footer>
