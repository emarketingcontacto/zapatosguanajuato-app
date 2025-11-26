<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
             <title> Fabricantes Calzado {{$tipo}} para {{$genero}} en Guanajuato | Zapatos Guanajuato</title>
            <meta name="keywords" content="Fabricantes de zapato {{$tipo}} para {{$genero}}, a precios de fabrica"/>
            <meta name="description" content="Directorio de Fabricantes de calzado {{$tipo}} para {{$genero}} en Guanajuato. Proveedores para Maquila y Venta a Precios de Planta sin intermediarios"/>
            <link rel="canonical" href="{{URL::asset('/fabricantes-calzado-guanajuato/genero/'.strtolower($genero).'/tipo/'.$tipo)}}">
        {{-- end seo --}}

        {{-- images --}}
            <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
            <link rel="preload" as="image" href="{{URL::asset('/images/',$tipo.'.png')}}">
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
                <link rel="stylesheet" href="{{ URL::asset('css/online/subcategories-min.css') }}"/>
            {{-- end online --}}
        {{-- end style --}}

        {{-- script --}}
        {{-- end script --}}

        <!-- Google Analytics tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-LEV2309FWD"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-LEV2309FWD');
            </script>
        <!-- end Google Analytics tag (gtag.js) -->

        <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KZP9TGP6');</script>
        <!-- End Google Tag Manager -->

        {{-- Pinterest Tag --}}
            <meta name="p:domain_verify" content="59864595446c9bd25ed7b86d881293d4"/>
        {{-- End Pinterest Tag --}}

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

        {{-- mailchimp --}}
            <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}
            (document,"script","https://chimpstatic.com/mcjs-connected/js/users/948eabd2b6e2e810127ea36f7/1e99737d0b995b846ad75f09d.js");</script>
        {{-- end-mailchimp --}}
    </head>
    <x-layout>
        @section('main-content')
            <div class="subcat-hero">
                <div class="subcat-hero-header">
                    <h1> Fabricantes de Calzado {{ucfirst($tipo)}} para {{$genero}} en Guanajuato </h1>
                    {{-- call to action --}}
                        @include('partials._call-to-action')
                    {{-- end call to action --}}
                </div>
            </div>

            <div class="subcategories-intro-container">
                <div class="subcategories-intro">
                    <h2>Producción por Volumen de Calzado {{ucfirst($tipo)}} para {{$genero}}: Maquila y Precios de Planta en Guanajuato</h2>
                    <p>
                        Bienvenido a la fuente principal para la <strong>producción por volumen</strong> de calzado <strong>{{$tipo}}</strong> para <strong>{{$genero}}</strong>
                        en el estado de Guanajuato, centro neurálgico de la industria en México. Nuestro directorio conecta a su negocio directamente con las <strong>fábricas</strong>
                        en León que se especializan en la manufactura de este tipo de calzado con alta capacidad de respuesta.
                    </p>

                    <p>
                        Si busca iniciar o expandir su marca con <strong>maquila de calzado</strong>, nuestros <strong>fabricantes</strong> de calzado <strong>{{$tipo}}</strong>
                        están listos para cumplir pedidos de alto volumen, garantizando cotizaciones competitivas con <strong>precios de planta</strong> y tiempos de entrega eficientes.
                        Olvídese de intermediarios y negocie directamente con los <strong>productores</strong> de Guanajuato.
                    </p>

                    <p>
                        La calidad es nuestra garantía. El calzado <strong>{{$tipo}}</strong> fabricado en Guanajuato se distingue por el uso de <strong>pieles genuinas</strong>
                            y la aplicación de técnicas artesanales que aseguran un producto final durable y de alta demanda. Encuentre aquí <strong>proveedores</strong> que ofrecen
                            diseños modernos de calzado <strong>{{ucfirst($tipo)}}</strong> para <strong>{{$genero}}</strong> en diversos estilos, todo bajo un estricto control de calidad.
                    </p>

                    <p>
                        Explore nuestro listado y encuentre al socio ideal para su <strong>producción de marca blanca</strong> o su próxima gran distribución.
                    </p>
                </div>
            </div>

            {{-- submenu-categories --}}
                {{-- @include('partials._submenu-categories') --}}
            {{-- end submenu-categories --}}

            <div class="subcategories-submenu-container">
                {{-- submenu Genero --}}
                    <x-search-model-category bizcategory="Fabricantes" genero="{{$genero}}"></x-search-model-category>
                {{-- end submenu Genero --}}

                {{-- subcategories submenu --}}
                <x-submenu-subcategories categoria="Fabricantes" genero="{{ucfirst($genero)}}" tipo={{$tipo}}></x-submenu-subcategories>
                {{-- end subcategories submenu --}}
            </div>
            {{-- factories --}}
                @if ($modelsfactories->isEmpty())
                        <h2>No results</h2>
                @else
                    <div class="subcategories-container">
                        @foreach ($modelsfactories as $modelfactory )
                            <div class="card" style="width: 18rem;">
                                {{-- local --}}
                                <img src="{{asset('storage/'.$modelfactory->modelImage)}}" class="card-img-top" height="350px" alt="{{$modelfactory->bizName}}">
                                {{-- online --}}
                                {{-- <img src="{{asset('/'.$modelfactory->modelImage)}}" class="card-img-top" height="350px" alt="{{$modelfactory->bizName}}"> --}}
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
            {{-- end factories --}}

            {{-- subscribe --}}
            <x-subscribe></x-subscribe>
            {{-- end subscribe --}}
        @endsection
    </x-layout>
</html>
