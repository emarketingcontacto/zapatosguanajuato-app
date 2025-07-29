<link rel="stylesheet" href="{{ URL::asset('css/thankyouads.css')}}">
<x-layout pageTitle="Gracias Anunciante" pageDescription="Gracias Anunciante" keywords="Anunciante">
    @section('main-content')
        <div class="main-container">
            <div class="thanku-title">
                <h1>¡Gracias por asociarse con Zapatos Guanajuato!</h1>
                <p>
                    ¡Nos complace darle la bienvenida como nuevo anunciante en Zapatos Guanajuato!.
                    <p>Agradecemos enormemente su confianza para ayudarnos a presentar su negocio a nuestra dedicada audiencia
                    de entusiastas del calzado.</p>
                    <p>Confiamos en que esta alianza será un éxito y le brindará una valiosa visibilidad
                    a su marca en el dinámico mercado del calzado de Guanajuato.</p>
                </p>
            </div>

            <div class="thanku-followup">
                <h2>¡Casi listo! Por favor, completa tus datos comerciales:</h2>

                <p>Para asegurar que tu anuncio se vea lo mejor posible y llegue a la audiencia correcta, necesitamos que nos proporciones algunos datos de tu negocio.
                    <p>Por favor, haz clic en el siguiente enlace para completar la información requerida:</p>
                    <a href="https://forms.gle/ALmH97FcqfiAft3r8" class="btn btn-md btn-primary" id="comercial-data">
                        [Haz clic aquí para ingresar tus datos comerciales]
                    </a>
                </p>
                <p> Si tienes alguna pregunta durante este proceso o en cualquier momento, no dudes en contactarnos.
                    <p>Estamos aquí para ayudarte.</p>
                </p>
                <h3>¡Gracias de nuevo por unirte a la familia de Zapatos Guanajuato!</h3>
            </div>
        </div>

    @endsection
</x-layout>
