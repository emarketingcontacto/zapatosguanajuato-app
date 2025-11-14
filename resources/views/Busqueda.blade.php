<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title>Busqueda| ZapatosGuanajuato.com</title>
            <meta name="description" content="Buscar los mejores proveedores de calzado y haz negocio de manera segura, práctica y fácil"/>
            <meta name="keywords" content="Buscar Proveedores de Calzado en Guanajuato"/>
            {{-- canonical --}}
                <script>
                    const canonicalUrl = window.location.href;
                    const link = document.createElement('link');
                    link.rel = 'canonical';
                    link.href = canonicalUrl;
                    document.head.appendChild(link);
                </script>
            {{-- end canonical --}}

        {{-- end seo --}}

        {{-- images --}}
                <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
        {{-- end images --}}

        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/busqueda.css')}}"> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{URL::asset('css/online/busqueda-min.css')}}">
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
            <div class="busqueda-hero">
                <h1>Busquedas</h1>
            </div>
            <div class="busquedas-container">
                @foreach ($results as $result)
                    <div class="card" style="width: 18rem;">
                        {{--local--}}
                        <img class="card-img-top" src="{{asset('storage/'.$result->bizImage)}}" alt="{{$result->bizName}}" width="150px" height="150px">
                        {{--end local--}}
                        {{--online --}}
                        {{-- <img class="card-img-top" src="{{asset('/'.$result->bizImage)}}" alt="{{$result->bizName}}" width="150px" height="150px"> --}}
                        {{--end online --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$result->bizName}}</h5>
                            @switch($result->bizcatName)
                                @case('Fabricante')
                                    <div class="busqueda-provider-name">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                                        <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"></path>
                                        </svg>
                                        <p class="card-text">{{$result->bizcatName}}</p>
                                    </div>

                                    <div class="busqueda-container-control">
                                        <a href="{{route('Fabricantes.showFabricante', ['biz'=>$result->bizSlug])}}">
                                        Ver detalles..
                                        </a>
                                    </div>
                                @break
                                @case('Mayorista')

                                    <div class="busqueda-provider-name">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                                            <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.5 2.5 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354z"></path>
                                            <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708z"></path>
                                        </svg>
                                        <p class="card-text">{{$result->bizcatName}}</p>
                                    </div>
                                    <div class="busqueda-container-control">
                                        <a href="{{route('Wholesalers.showWholesaler', ['biz'=>$result->bizSlug])}}">
                                        Ver detalles..
                                        </a>
                                    </div>

                                @break
                                @case('Minorista')

                                    <div class="busqueda-provider-name">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                                        <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"></path>
                                        </svg>
                                        <p class="card-text">{{$result->bizcatName}}</p>
                                    </div>
                                    <div class="busqueda-container-control">
                                        <a href="{{route('Retails.showRetailer', ['biz'=>$result->bizSlug])}}">
                                        Ver detalles..
                                        </a>
                                    </div>
                                @break
                                @default

                            @endswitch



                        </div>
                    </div>
                @endforeach
            </div>
        @endsection
    </x-layout>
</html>
