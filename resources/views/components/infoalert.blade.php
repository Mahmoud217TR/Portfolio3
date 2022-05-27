@if (session()->has('message'))
    <div id='info-fader' class="info-alert background-dim fader">
        <p class="savec white-text text-center m-0">
            {{ session()->get('message') }}
        </p>
    </div>
    <script>
        window.addEventListener('load', (event) =>{
            document.getElementById("info-fader").classList.add('fade');
        });
    </script>
@endif