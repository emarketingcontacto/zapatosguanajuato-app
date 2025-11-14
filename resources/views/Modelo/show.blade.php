<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="robots" content="index, follow">
{{-- seo --}}
    <title>Modelo:{{$modelo->modelName}} de {{$biz->bizName}} | ZapatosGuanajuato.com</title>
    <meta name="description" content="Modelo {{$modelo->modelName}} para {{$modelcategory->modelcatName}} de {{$biz->bizName}} solicita una cotización hoy mismo."/>
    <meta name="keywords" content="Directorio de calzado {{$biz->bizName}}, Modelos de {{$biz->bizName}}"/>
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
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/modelo.css')}}"> --}}
    {{-- end local
    {{-- online --}}
        <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/online/modelo-min.css')}}">
    {{-- end online --}}
{{-- end style --}}

{{-- sripts --}}
    <script>
        // 1. Declarar y poblar el Data Layer con información de la página/categoría
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'page_view_minorista', // Evento custom para saber que estamos en una página de listado monetizable
            'page_category': 'Minorista',
            'page_category_level2': '{{ $modelcategory->modelcatName ?? "todos" }}',// Usar el género de la URL
            'page_category_level3': '{{ $modelsubcategory->modelsubcatName ?? "todos" }}', //  Usar el tipo de la URL
            // 2. Información de la Tienda (Este objeto se poblará dinámicamente)
            'tienda_info': {}
        });
        // console.log(dataLayer);
    </script>
{{-- end scripts  --}}

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


        <div class="modelo-container">

            <div class="model-hero">
                    {{-- local --}}
                    <img src="{{asset('storage/'.$modelo->modelImage)}}" height="50%" width="50%">
                    {{-- online --}}
                    {{-- <img src="{{asset('/'.$modelo->modelImage)}}" height="100%" width="100%"> --}}
                    <h1 class="hero-text-modelo">{{$modelo->modelName}}</h1>
            </div>
        </div>
        <div class="modelo-info-main">

            <div class="modelo-info">

                <div class="row">
                    <div class="col text-end model-field">Distribuidor:</div>
                    <div class="col text-start model-value">

                        {{-- @php $url; @endphp --}}
                        @switch($bizcategory->bizcatName)
                            @case("Fabricante")
                                <a href="{{route("Fabricantes.showFabricante", ['biz'=>$biz->bizSlug])}}">
                                    {{$biz->bizName}}
                                </a>
                            @break
                            @case("Mayorista")
                                <a href="{{route("Wholesalers.showWholesaler", ['biz'=>$biz->bizSlug])}}">
                                    {{$biz->bizName}}
                                </a>
                            @break
                            @case("Minorista")
                                <a href="{{route("Retails.showRetailer", ['biz'=>$biz->bizSlug])}}">
                                    {{$biz->bizName}}
                                </a>
                                @break
                            @default
                        @endswitch

                    </div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Precio:</div>
                    <div class="col text-start model-value model-price" style="currency, currency:'MXN'">${{number_format($modelo->modelPrice,2,'.',',')}}</div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Material:</div>
                    <div class="col text-start model-value">{{$material->materialName}}</div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Temporada:</div>
                    <div class="col text-start model-value">{{$seasson->seassonName}}</div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Disponible desde:</div>
                    <div class="col text-start model-value">{{$seasson->seassonStart}}</div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Disponible hasta:</div>
                    <div class="col model-value">{{$seasson->seassonEnd}} </div>
                </div>
                <div class="row">
                    <div class="col text-end model-field">Categoria</div>
                    <div class="col model-value">{{$modelcategory->modelcatName}}</div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="https://www.dorothygaynor.com/"
                            class="btn btn-primary"
                            target="_blank"
                            onclick="trackMinoristaClick(
                            '{{$biz->bizId}}',
                            '{{$biz->bizName}}',
                            '{{$modelcategory->modelcatName}}',
                            '{{$modelsubcategory->modelsubcatName}}'
                            )">
                            Ver tienda Online
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-layout>
<script>

function trackMinoristaClick(bizId, bizName, genero, tipo){

        dataLayer.push({
            'tienda_info':{
                'tienda_id':bizId,
                'tienda_name':bizName,
                'genero':genero,
                'tipo':tipo
            }
        });
        dataLayer.push({
            'event':'outbound_click_minorista'
        });
    }

</script>
</html>
