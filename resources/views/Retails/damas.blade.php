<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title>Comprar Calzado para Damas de Guanajuato | Venta por Catálogo y Tiendas Online</title>
            <meta name="keywords" content="Calzado Damas Guanajuato en línea, venta de zapatos por catálogo, tiendas online de calzado femenino, menudeo mujer"/>
            <meta name="description" content="Directorio de Minoristas y Tiendas en Línea para Comprar Calzado Mujer Guanajuato. Encuentra las últimas colecciones, precios finales envío a domicilio."/>
            <link rel="canonical" href="{{URL::asset('/minoristas-calzado-guanajuato/genero/mujer')}}">
        {{-- end seo --}}



        {{-- images --}}
            <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
            <link rel="preload" as="image" href="{{asset('storage/'.$modelcat->modelcatImage)}}">
        {{-- end images --}}

        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/genders.css') }}" /> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/genders-min.css') }}" />
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

        <div class="genders-hero" style="background-image: url('{{asset('storage/'.$modelcat->modelcatImage)}}')" alt="DirectorioDamas">
            <h1>Tiendas para Comprar Zapatos de mujer de Guanajuato</h1>
            {{-- call to action --}}
            @include('partials._call-to-action')
            {{-- end call to action --}}
        </div>
        {{-- intro text --}}
            <div class="genders-intro-container">
                <div class="genders-intro">
                    <h2 class="seo-title">Minoristas de Calzado para Dama en Guanajuato: Compra Online y Catálogo</h2>
                    <p>
                        Bienvenida al directorio de <strong>tiendas online</strong> especializadas en <strong>calzado para mujer</strong> de Guanajuato. Si buscas las últimas tendencias y deseas
                        <strong>comprar zapatos en línea</strong> a <strong>precios finales</strong>, esta sección te conecta directamente con los minoristas más confiables de la región.
                    </p>
                    <p>
                        Aquí tienes acceso a colecciones completas de <strong>calzado femenino</strong>, incluyendo modelos de moda, botas, tacones y tenis. Nuestros minoristas ofrecen la flexibilidad de la <strong>venta por catálogo</strong> y la seguridad de las plataformas de <strong>compra online</strong>, garantizando la venta al <strong>menudeo</strong> sin mínimos de compra.
                    </p>
                    <p>
                        Encuentra modelos exclusivos, compara <strong>precios de minorista</strong> y disfruta de la comodidad del <strong>envío a domicilio</strong> a cualquier parte de México.
                        La calidad de la piel y la manufactura de Guanajuato están ahora al alcance de tu mano.
                    </p>
                    <p>
                        Explora nuestro listado de tiendas y comienza hoy mismo tu compra directa de calzado para dama.
                    </p>
                </div>
            </div>
        {{-- end intro text --}}

        <div class="genders-submenu-container">
            {{-- submenu-categories --}}
                {{-- @include('partials._submenu-categories') --}}
            {{-- end submenu-categories --}}

            {{-- submenu Genero --}}
                <x-search-model-category bizcategory="Retails" genero="Damas"></x-search-model-category>
            {{-- end submenu Genero --}}

            {{-- subcategories submenu --}}
            <x-submenu-subcategories categoria="Retails" genero="mujer" tipo=""></x-submenu-subcategories>
            {{-- end subcategories submenu --}}
        </div>

        {{-- Retails Damas --}}
            <div class="genders-category-container">
                @foreach ($business as $biz)
                    <div class="card" style="width: 18rem; background-color:#F5F5F5">
                        {{-- local --}}
                        {{-- <img src="{{asset('storage/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px"> --}}
                        {{-- online --}}
                        <img src="{{asset('/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px">
                        <h4 class="genders-card-title">{{$biz->bizName}}</h4>
                        <div class="card-body card-text">
                            {{--BizCatName--}}
                            <div class="gender-row-catname">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                                        <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                    <p>{{$biz->bizcatName}}</p>
                            </div>
                            {{--end BizCatName--}}

                            {{-- likes --}}
                                {{-- <div class="row likes">
                                    <div class="col verified">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
                                        </svg>
                                        <span>verificado</span>
                                        <span style="font-size:.7rem">{{$biz->bizLastvisit}}</span>
                                    </div>
                                    <x-likes :bizID="$biz->bizId"></x-likes>
                                </div> --}}
                            {{-- end likes --}}

                            {{-- modelCategoriesList--}}
                                <x-ModelCategoriesList :bizID="$biz->bizId"></x-ModelCategoriesList>
                            {{-- end modelCategoriesList--}}

                            <hr style="margin: 0">
                            <div class="genders-btn-show">
                                <a href="{{route('Fabricantes.showFabricante', ['biz'=>$biz->bizSlug])}}" class="btn btn-sm form-control">
                                    Ver Detalles...
                                </a>
                            </div>
                        </div>

                    </div>

                @endforeach
            </div>
        {{-- end Retails Damas --}}

        @endsection

    </x-layout>
</html>
