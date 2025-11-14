<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <meta name="description" content="Mayoristas de zapato {{$tipo}}. Explora imágenes de modelos exclusivos y encuentra fácilmente los contactos directos para tus compras al por mayor"/>
            <meta name="keywords" content="Directorio de zapato {{$tipo}} para {{$genero}} a precio de mayoreo"/>
            <title> Calzado {{$tipo}} para {{$genero}} | ZapatosGuanajuato.com</title>
            <link rel="canonical" href="{{URL::asset('/minoristas-calzado-guanajuato/genero/'.$genero.'/tipo/'.$tipo)}}">
        {{-- end seo --}}

        {{-- images --}}
            <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
            <link rel="preload" as="image" href="{{URL::asset('/images/'.$tipo.'.png')}}">
        {{-- end images --}}

        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/subcategories.css')}}"> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/subcategories-min.css') }}" />
            {{-- end online --}}
        {{-- end style --}}

        {{-- script --}}
        {{-- end script --}}

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
            <div class="subcat-hero">
                {{-- local --}}
                {{-- <img src="{{asset('/images/'.$tipo.'.png')}}"> --}}
                {{-- online --}}
                {{-- <img src="{{asset('storage/'.$strlower.'.png')}}"> --}}
                <div class="subcat-hero-header">
                    <h1>Comprar Calzado {{ucfirst($tipo)}} para {{ucfirst($genero)}} | Tiendas Online al Menudeo</h1>
                    {{-- call to action --}}
                    @include('partials._call-to-action')
                    {{-- end call to action --}}
                </div>
            </div>

            <div class="subcategories-intro-container">
                <div class="subcategories-intro">
                    <h2 class="seo-title">Tiendas Online de Calzado {{ucfirst($tipo)}} para {{$genero}}: Compra al Menudeo</h2>
                    <p>
                        Bienvenido al directorio especializado en <strong>tiendas de calzado {{ucfirst($tipo)}} para {{$genero}}</strong> en Guanajuato. Si buscas las últimas tendencias
                        y deseas <strong>comprar zapatos en línea</strong> a <strong>precios finales</strong>, esta sección es tu conexión directa con los minoristas más destacados.
                    </p>
                    <p>
                        Aquí te conectamos con <strong>minoristas</strong> que manejan stock para <strong>venta individual</strong> de modelos {{ucfirst($tipo)}}. Olvídate de los pedidos al
                         por mayor: tienes acceso a la selección completa para <strong>{{$genero}}</strong>, permitiéndote elegir tallas y modelos individuales <strong>sin mínimos de compra</strong>.
                    </p>
                    <p>
                        Nuestras tiendas se especializan en ofrecer la comodidad de la <strong>compra por catálogo</strong> o a través de plataformas de <strong>venta en línea</strong>.
                        Explora <strong>imágenes de modelos exclusivos</strong>, compara <strong>precios de menudeo</strong> y disfruta de todas las garantías y facilidades de
                         <strong>envío a domicilio</strong>.
                    </p>
                    <p>
                        Encuentra tu calzado {{ucfirst($tipo)}} de alta calidad para {{$genero}} y comienza tu compra directa hoy mismo con la tranquilidad de un precio justo y un envío seguro.
                    </p>
                </div>
            </div>



        <div class="subcategories-submenu-container">
            {{-- submenu-categories --}}
                {{-- @include('partials._submenu-categories') --}}
            {{-- end submenu-categories --}}

            {{-- submenu Genero --}}
                <x-search-model-category bizcategory="Retails" genero="{{$genero}}"></x-search-model-category>
            {{-- end submenu Genero --}}

            {{-- subcategories submenu --}}
            <x-submenu-subcategories categoria="Retails" genero="{{ucfirst($genero)}}" tipo={{$tipo}} ></x-submenu-subcategories>
            {{-- end subcategories submenu --}}
        </div>
            {{-- Retails --}}
                @if ($modelsfactories->isEmpty())
                        <h2>No results</h2>
                @else
                    <div class="subcategories-container">
                        @foreach ($modelsfactories as $modelfactory )
                            <div class="card" style="width: 18rem;">
                                {{-- local --}}
                                {{-- <img src="{{asset('storage/'.$model->modelImage)}}" class="card-img-top" height="350px" alt="{{$model->bizName}}"> --}}
                                {{-- online --}}
                                <img src="{{asset('/'.$modelfactory->modelImage)}}" class="card-img-top" height="350px" alt="{{$modelfactory->bizName}}">
                                <div class="card-body">
                                    <h5 class="card-title">{{$modelfactory->modelName}}</h5>
                                </div>
                                <ul class="list-group text-center">
                                {{-- <li class="list-group-item">{{$modelfactory->saletypeConditions}}</li> --}}
                                <li class="list-group-item">Sale Type Conditions</li>
                                <li class="list-group-item">{{$modelfactory->modelsubcatName}}</li>
                                <li class="list-group-item subcat-price" style="currency, currency:'MXN'">${{number_format($modelfactory->modelPrice,2,'.',',')}}</li>
                                <li class="list-group-item">{{$modelfactory->bizName}}</li>
                                <li class="list-group-item">{{$modelfactory->bizcatName}}</li>
                                </ul>
                                <div class="btn-subcategorie-show">
                                    <a  href="{{route('Modelo.show', ['modelo'=>$modelfactory->modelId])}}">
                                        Detalles del modelo...
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            {{-- end Retails --}}

            {{-- subscribe --}}
            <x-subscribe></x-subscribe>
            {{-- end subscribe --}}
        @endsection
    </x-layout>
</html>
