{{-- css --}}
    {{-- local --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/components/subscribe.css') }}" /> --}}
    {{-- online --}}
    <link rel="stylesheet" href="{{ URL::asset('css/online/components/subscribe-min.css') }}" />
{{-- end css --}}

    <div class="subscribe-container">
        <div class="subscribe-left">
            <h2>Manténgase actualizado.</h2>
            <p>Suscríbase a nuestro boletín informativo para estar al día con las novedades del Directorio de Zapatos Guanajuato.</p>
        </div>
        <div class="subscribe-button">
            <a href="{{route('User.create')}}" class="btn btn-subscribe">Suscribirse</a>
        </div>
    </div>


