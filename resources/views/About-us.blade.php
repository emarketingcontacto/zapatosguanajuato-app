<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title> Marketing Digital Industria Calzado Guanajuato | ZapatosGuanajuato.com</title>
            <meta name="description" content="Desarrollo Web-Marketing Digital-Campañas Dirigidas |17 años de experiencia transformando marcas de calzado, Impulsa tu presencia y crecimiento digital."/>
            <meta name="keywords" content="Venta y Compra de Zapatos Guanajuato, Marketing Digital para la Industria del Calzado Guanajuato, Venta al Mayoreo, Precios de Fabrica, Venta en Linea"/>
            <link rel="canonical" href="{{URL::asset('/acerca-de-nosotros')}}">
        {{-- end seo --}}

        {{-- images --}}
                <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
        {{-- end images --}}

        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/about-us.css') }}" /> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/about-us-min.css')}}">
            {{-- end online --}}
        {{-- end style --}}

        {{-- scripts --}}
        {{-- end scripts --}}

        {{-- tags --}}
            @include('partials._tags')
        {{-- end tags --}}

        {{-- schema --}}
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "OnlineStore",
                "name": "Zapatos Guanajuato",
                "description": "Catalogo,Fabricantes,Zapatos,Mayoristas,Calzado,Negocio,Leon,Guanajuato",
                "image": "	https://zapatosguanajuato.com/public/images/img_index.jpg",
                "logo": "",
                "parentOrganization": {
                "@type": "OnlineBusiness",
                "name": "Zapatos Guanajuato",
                "url": "https://zapatosguanajuato.com"
                },
                "address": {
                "@type": "PostalAddress",
                "addressCountry": "Mexico",
                "addressLocality": "Guanajuato"
                },
                "aggregateRating": {
                "@type": "AggregateRating",
                "ratingCount": 20,
                "ratingValue": 4.7
                },
                "interactionStatistic": {
                "@type": "InteractionCounter",
                "userInteractionCount": 75,
                "interactionType": "https://schema.org/TradeAction"
                },
                "foundingDate": "2019-10-24"
            }
            </script>
        {{-- end schema --}}

    </head>

    <x-layout>

        @section('main-content')

            <div class="about-us-hero">
                <h1>Acerca de Nosotros</h1>
            </div>
            <div class="about-us-intro">
                <p>
                    Somos un equipo de especialistas en píxeles y estrategas obsesionados con el crecimiento, impulsados por 17 años de experiencia en el siempre cambiante panorama digital.
                    Desde capturar tu historia a través de fotografías asombrosas hasta convertirla en una presencia web perfecta y amplificarla a través de campañas dirigidas, somos tu ventanilla para crear un viaje digital que encienda tu marca y te impulse hacia el éxito.
                </p>
            </div>

            <h3 class="about-us-title">Nuestro Expertise</h3>
                <div class="div-expertise">
                    <div class="item-expertise">
                        <h4>Fotografía digital:</h4>
                        Creemos que las imágenes dicen más que mil palabras, y nuestros galardonados fotógrafos pintan la historia de tu marca con imágenes cautivadoras que resuenan con tu audiencia.
                    </div>
                    <div class="item-expertise">
                        <h4>Desarrollo web:</h4>
                        Vamos más allá de los píxeles y el código. Creamos sitios web funcionales y fáciles de usar que no solo son estéticamente agradables sino que también están optimizados para la conversión y el crecimiento.
                    </div>
                    <div class="item-expertise">
                        <h4>Marketing digital:</h4>
                        Somos estrategas basados en datos que entienden el pulso del mundo digital. Analizamos, diseccionamos e implementamos campañas exitosas en varios canales,
                        generando tráfico dirigido y engagement.
                    </div>
                    <div class="item-expertise">
                        <h4>Desarrollo de negocios:</h4>
                        No somos solo comercializadores, somos tus socios de crecimiento. Entendemos los objetivos de tu negocio y los traducimos
                        en estrategias accionables que brindan resultados impactantes.
                    </div>
                </div>
        @endsection
    </x-layout>
</html>
