<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title>Mayoreo-Fabricacion Calzado Guanajuato | ZapatosGuanajuato</title>
            <meta name="keywords" content="Mayoreo, Fabricacion, Calzado, Guanajuato, Directorio"/>
            <meta name="description" content="Directorio de Fabricantes y Mayoristas de Calzado en Guanajuato. Encuentra proveedores directos de zapatos para tu negocio de mayoreo. ¡Inicia tu compra!"/>
            <link rel="canonical" href="{{URL::asset('/')}}">
        {{-- end seo --}}

        {{-- images --}}
            <link rel="preload" as="image" href="{{URL::asset('images/hero.webp') }}">
            <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
            {{-- <link rel="preload" as="image" href="{{URL::asset('images/img_index_small.avif') }}"> --}}
        {{-- end images --}}

        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/welcome.css')}}"> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{URL::asset('css/online/welcome-min.css')}}">
            {{-- end online --}}
        {{-- end style --}}

        {{-- sripts --}}
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
                @include('/partials/_hero')

                {{-- Galery Last Models --}}
                    <x-GalleryFront></x-GalleryFront>
                {{-- end Galery Last Models --}}

                {{--Categories-front--}}
                <x-categories-front></x-categories-front>
                {{--End Categories-front--}}

                {{-- ATTENTION --}}
                <div class="attention-container">
                    <div class="attention">
                        <h2>¿PORQUE ELEGIRNOS?</h2>
                        <p><strong>Una Mejor Manera de Encontrar Calzado</strong></p>
                    </div>
                    <div class="attention-text">
                        <p>Hemos creado una plataforma diseñada para fomentar la confianza, la transparencia y el acceso directo en la industria del calzado.</p>
                    </div>
                </div>


                {{-- END ATTENTION --}}

                {{--  INTEREST A --}}
                <div class="Buttons">
                    <div class="buttons-section">
                        <div class="buttonA-image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
                                <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9q-.13 0-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                                <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4 4 0 0 1-.82 1H12a3 3 0 1 0 0-6z"/>
                            </svg>
                        </div>
                        <h3>Conexion Directa</h3>
                        <div class="buttonA-text">
                            Evita intermediarios y conéctate directamente con fabricantes, mayoristas y minoristas.
                        </div>
                    </div>
                    <div class="buttons-section">
                        <div class="buttonA-image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
                            </svg>
                        </div>
                        <h3>Compra con Confianza</h3>
                        <div class="buttonA-text">
                            Verificamos físicamente a cada proveedor para asegurar que su empresa se abastece de socios confiables.
                        </div>
                    </div>
                    <div class="buttons-section">
                        <div class="buttonA-image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>
                        </div>
                        <h3>Transparencia Total</h3>
                        <div class="buttonA-text">
                            Nuestro directorio le permite identificar a los mejores proveedores con los precios más competitivos.
                        </div>
                    </div>

                    <div class="buttons-section">
                        <div class="buttonA-image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                            </svg>
                        </div>
                        <h3>Precio de Garantía</h3>
                        <div class="buttonA-text">
                            Nuestras estrategias digitales garantizan que los proveedores de nuestra plataforma estén activos y listos para cumplir con los pedidos.
                        </div>
                    </div>

                </div>
                {{-- END INTEREST A --}}



                <div class="front-title-container">
                    <div class="gallery-front-title">
                       <h2>Proveedores de Calzado Destacados en Guanajuato</h2>
                    </div>
                </div>

                {{-- Most Factories --}}
                    <x-most-factories></x-most-factories>
                {{-- End Most Factories --}}

                {{-- Most Wholesalers --}}
                    <x-most-wholesalers></x-most-wholesalers>
                {{-- End Most Wholesalers --}}

                {{-- Most Retailers --}}
                    <x-most-retailers></x-most-retailers>
                {{-- End Most Retailers --}}

                {{-- Subscribe --}}
                    <x-subscribe></x-subscribe>
                {{-- end Subscribe --}}

                {{-- CALL TO ACTION --}}
                {{-- <x-call-to-action></x-call-to-action> --}}
                {{-- END CALL TO ACTION --}}
        @endsection
    </x-layout>
</html>
