<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
        <title>Gracias Anunciante | ZapatosGuanajuato.com</title>
        <meta name="description" content="Gracias Anunciante de Zapatos Guanajuato.com"/>
        <meta name="keywords" content="Gracias Anunciante de Zapatos Guanajuato.com"/>
        <link rel="canonical" href="https://zapatosguanajuato.com/gracias-anunciante">
        {{-- end seo --}}

        {{-- images --}}
            <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
        {{-- end images --}}

        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/thankyouads.css')}}"> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/thankyouads-min.css')}}">

            {{-- end online --}}
        {{-- end style --}}

        {{-- sripts --}}
        {{-- scripts --}}

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
            <div class="thanku-advertiser-hero">
                <h1>¡Gracias!</h1>
            </div>
            <div class="thanku-container">
                <h2>Casi listo, por favor, completa tus datos comerciales:</h2>
                <p>Para asegurar que tu anuncio se vea lo mejor posible y llegue a la audiencia correcta, necesitamos que nos proporciones algunos datos de tu negocio.</p>
                <div class="thanku-control">
                    {{-- <a href="{{route('Anunciantes')}}" class="thanku-button" id="comercial-data"> --}}
                    <a href="{{route('Prospectos.create')}}" class="thanku-button" id="comercial-data">
                        Ingresar
                    </a>
                </div>
            </div>
        @endsection
    </x-layout>
</html>
