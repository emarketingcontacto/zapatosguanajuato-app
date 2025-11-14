<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title>Mayoristas Calzado {{$tipo}} para {{$genero}} | Zapatos Guanajuato</title>
            <meta name="description" content="Directorio Mayoristas de Calzado {{$tipo}} para {{$genero}} en Guanajuato. Compra por mayoreo flexible con bajos mínimos y modelos mixtos. ¡Ideal para revendedores!"/>
            <meta name="keywords" content="mayoristas calzado {{$tipo}}, mayoreo flexible, bajos mínimos, distribuidores calzado {{$tipo}} {{$genero}}"/>
            <link rel="canonical" href="{{URL::asset('/mayoristas-calzado-guanajuato/genero/'.strtolower($genero).'/tipo/'.strtolower($tipo))}}">
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
                <img src="{{asset('/images/'.$tipo.'.png')}}">
                {{-- online --}}
                {{-- <img src="{{asset('storage/'.$strlower.'.png')}}"> --}}
                <div class="subcat-hero-header">
                    <h1>Directorio de Mayoristas: Calzado {{ucfirst($tipo)}} para {{ucfirst($genero)}} (Mayoreo Flexible)</h1>
                    {{-- call to action --}}
                    @include('partials._call-to-action')
                    {{-- end call to action --}}
                </div>
            </div>


            <div class="subcategories-intro-container">
                <div class="subcategories-intro">
                    <h2 class="seo-title">Mayoristas de Calzado {{ucfirst($tipo)}} para {{$genero}}: Bajos Mínimos en Guanajuato</h2>
                    <p>
                        Bienvenido al directorio especializado en <strong>mayoristas de calzado {{ucfirst($tipo)}} para {{$genero}}</strong>. Si buscas iniciar tu negocio o surtir tu stock sin grandes compromisos,
                        aquí encontrarás a los principales <strong>distribuidores</strong> de Guanajuato que ofrecen <strong>mayoreo flexible</strong> adaptado a tus necesidades.
                    </p>
                    <p>
                        Nuestros proveedores se especializan en ofrecer <strong>bajos mínimos de compra</strong> para calzado <strong>{{ucfirst($tipo)}}</strong>, permitiéndote seleccionar modelos y tallas mixtas
                        para reducir el riesgo de inventario y optimizar tu capital. Esta flexibilidad es ideal para emprendedores, tiendas en línea o revendedores que necesitan reducir el riesgo de inventario.
                    </p>
                    <p>
                        Encuentra aquí la mejor selección de <strong>calzado {{ucfirst($tipo)}}</strong> de alta calidad para <strong>{{$genero}}</strong>, con modelos listos para envío inmediato. La compra por mayoreo
                         te garantiza un producto fresco y de alta rotación.
                    </p>
                    <p>
                        Conéctate con <strong>distribuidores de calzado</strong> confiables, explora sus catálogos y comienza a crecer tu negocio sin las restricciones de la producción por volumen.
                    </p>
                </div>
            </div>

            <div class="subcategories-submenu-container">
                {{-- submenu-categories --}}
                    {{-- @include('partials._submenu-categories') --}}
                {{-- end submenu-categories --}}

                {{-- submenu Genero --}}
                    <x-search-model-category bizcategory="Wholesalers" genero="{{$genero}}"></x-search-model-category>
                {{-- end submenu Genero --}}

                {{-- subcategories submenu --}}
                <x-submenu-subcategories categoria="Wholesalers" genero={{ucfirst($genero)}} tipo={{$tipo}}></x-submenu-subcategories>
                {{-- <x-submenu-subcategories categoria="Wholesalers" genero="mujer" tipo={{$tipo}}></x-submenu-subcategories> --}}
            </div>


            {{-- Wholesalers --}}
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
            {{-- end Wholesalers --}}

            {{-- subscribe --}}
            <x-subscribe></x-subscribe>
            {{-- end subscribe --}}
        @endsection
    </x-layout>
</html>
