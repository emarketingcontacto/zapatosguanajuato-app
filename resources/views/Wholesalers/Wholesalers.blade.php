<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">

        {{-- seo --}}
            <title>Mayoristas Calzado Guanajuato: Mayoreo Flexible, Bajos Mínimos | ZapatosGuanajuato</title>
            <meta name="description" content="Mayoristas de Calzado en Guanajuato. Compra zapatos por Mayoreo con bajos mínimos, modelos mixtos y precios competitivos. ¡Ideal para iniciar tu negocio!"/>
            <meta name="keywords" content="mayoristas de calzado, venta de zapatos por mayoreo, proveedores de calzado guanajuato, distribuidores de calzado, calzado bajos minimos, mayoreo flexible, iniciar negocio calzado"/>
            <link rel="canonical" href="{{URL::asset('/mayoristas-calzado-guanajuato')}}">
        {{-- end seo --}}

        {{-- images --}}
            <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
            <link rel="preload" as="image" href="{{URL::asset('storage/'.$bizcat->bizcatImage)}}">
        {{-- end images --}}

        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/categories-pages.css') }}"/> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/categories-pages-min.css') }}" />
            {{-- end online --}}
        {{-- end style --}}

        {{-- scripts --}}
            {{-- sripts local --}}
                <script src="{{URL::asset('scripts/factories.js')}}" defer></script>
                {{-- <script src="{{URL::asset('/scripts/script.js')}}" defer></script>--}}
            {{-- end sripts local--}}
            {{-- scripts online --}}
                {{-- <script src="{{URL::asset('/scripts/script-min.js')}}"></script> --}}
            {{-- end scripts online --}}
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
            {{--Header--}}
            <div class="category-header" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');">
                <h1>Directorio de Mayoristas: Mayoreo Flexible de Calzado en Guanajuato</h1>
                {{-- call to action --}}
                    @include('partials._call-to-action')
                {{-- end call to action --}}
            </div>
            {{-- intro text --}}
            <div class="categories-intro-container">
                <div class="categories-intro">
                    <h2>Mayoreo Flexible en Guanajuato: Bajos Mínimos y Modelos Mixtos para Revendedores</h2>

                    <p>
                        Si estás buscando iniciar tu negocio de calzado o necesitas surtir tu tienda con flexibilidad, nuestro directorio es tu aliado. Aquí encontrarás a los principales <strong>distribuidores y mayoristas de calzado</strong> de Guanajuato que ofrecen un <strong>mayoreo flexible</strong> adaptado a tus necesidades.
                    </p>

                    <p>
                        A diferencia de la venta directa de planta, nuestros <strong>proveedores</strong> se especializan en ofrecer <strong>bajos mínimos de compra</strong>, permitiéndote seleccionar modelos y tallas mixtas para reducir el riesgo de inventario y optimizar tu capital. Es la opción ideal para emprendedores, revendedores de redes sociales y pequeñas boutiques que buscan márgenes de ganancia competitivos.
                    </p>

                    <p>
                        Trabajamos con <strong>mayoristas de calzado</strong> que mantienen un amplio catálogo de stock con modelos listos para envío inmediato, cubriendo tendencias en todo tipo de zapatos. Esto garantiza que siempre tendrás productos frescos y de alta rotación. La calidad del calzado de Guanajuato es tu mejor carta de presentación para tus clientes.
                    </p>

                    <p>
                        Conéctate hoy con <strong>distribuidores de calzado</strong> confiables, explora sus catálogos y comienza a crecer tu negocio de <strong>venta por mayoreo</strong> sin las restricciones de la producción por volumen.
                    </p>
                </div>
            </div>

            {{-- end intro text --}}

            <div class="categories-pages-submenu">
                {{-- submenu-categories --}}
                    @include('partials._submenu-categories', ['selectedCategory'=>'Wholesalers'])
                {{-- end submenu-categories --}}

                {{-- submenu Genero --}}
                    <x-search-model-category bizcategory="Wholesalers" genero=""></x-search-model-category>
                {{-- end submenu Genero --}}

                {{-- subcategories submenu --}}
                    {{-- <x-submenu-subcategories categoria="Fabricantes" genero="mujer"></x-submenu-subcategories> --}}
                {{-- end subcategories submenu --}}
            </div>

            {{-- Banner --}}
            <x-banner catName="{{$bizcat->bizcatName}}"></x-banner>
            {{-- end Banner --}}


            {{-- Biz Items --}}
            <div class="biz-item-container">
                @foreach ($business as $biz)

                    <div class="card" style="width: 18rem; background-color:#F5F5F5">
                        {{-- local --}}
                        {{-- <img src="{{asset('storage/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px"> --}}
                        {{-- online --}}
                        <img src="{{asset('/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px">
                        <h4 class="card-title">{{$biz->bizName}}</h4>
                        <div class="card-body card-text">
                            {{--BizCatName--}}
                            <div class="biz-row-catname">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                                        <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.5 2.5 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354z"/>
                                        <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708z"/>
                                    </svg>
                                    <p>{{$biz->bizcatName}}</p>
                            </div>
                            {{--end BizCatName--}}

                            {{-- modelCategoriesList--}}
                                <x-ModelCategoriesList :bizID="$biz->bizId"></x-ModelCategoriesList>
                            {{-- end modelCategoriesList--}}
                            <hr style="margin: 0">
                            <div class="btn-show">
                                <a href="{{route('Wholesalers.showWholesaler', ['biz'=>$biz->bizSlug])}}" class="btn btn-sm  btn-show form-control">
                                    Ver Detalles...
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- end Biz Items --}}

            {{-- faq --}}
                <div class="faq-section">
                    <h2>Preguntas Frecuentes sobre la Compra de Calzado por Mayoreo con Proveedores</h2>

                    <div class="faq-item">

                        <div class="faq-question" id="question-1" onclick="openAnswer(event)">
                            <h3>1. ¿Cuál es la cantidad mínima de compra (MOQ) de calzado para obtener precios de mayoreo?</h3>
                            <svg id="icon-faq-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>

                        <div class="faq-answer ans-closed" id="response-1">
                            <p>La mayoría de los <strong>mayoristas de calzado</strong> listados ofrecen un <strong>mínimo de compra (MOQ)</strong> mucho más bajo que el de las fábricas. Generalmente,
                                el mínimo se establece a partir de <strong>3 a 6 pares</strong>. Le recomendamos contactar al <strong>mayorista</strong> directamente para confirmar si permiten combinar
                                modelos y tallas para alcanzar el volumen de <strong>mayoreo</strong>.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">

                        <div class="faq-question" id="question-2" onclick="openAnswer(event)">
                            <h3>2. ¿Puedo mezclar modelos, tallas o colores para completar mi pedido de mayoreo?</h3>
                            <svg id="icon-faq-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                        <div class="faq-answer ans-closed " id="response-2">
                            <p>
                                Sí, esta es la principal ventaja de trabajar con un <strong>mayorista</strong>. A diferencia del fabricante que exige la compra por "corrida" completa, la mayoría de nuestros
                                <strong>proveedores mayoristas</strong> son flexibles y permiten el <strong>surtido de modelos</strong> y tallas en el mismo pedido. Esto es ideal para las tiendas
                                que necesitan variedad sin tener que invertir en grandes volúmenes.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" id="question-3" onclick="openAnswer(event)">
                            <h3>3. ¿Cuál es el rango de precios de mayoreo que manejan los distribuidores en Guanajuato?</h3>
                            <svg id="icon-faq-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>

                        <div class="faq-answer ans-closed" id="response-3">
                            <p>
                                El precio del <strong>mayorista</strong> es marginalmente superior al de venta directa de fábrica, pero sigue siendo un precio de distribuidor altamente competitivo.
                                Espere precios que le aseguren un excelente margen de ganancia para su <strong>negocio de calzado</strong>. Lo más importante es que el menor volumen inicial y
                                la flexibilidad reducen su <strong>riesgo de inventario</strong>.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" id="question-4" onclick="openAnswer(event)">
                            <h3>4. ¿Qué facilidades de pago o sistemas de apartado ofrecen los mayoristas de calzado?</h3>
                            <svg id="icon-faq-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                        <div class="faq-answer ans-closed" id="response-4">
                            <p>
                                Los <strong>mayoristas de calzado</strong> suelen ofrecer mayor flexibilidad financiera que los fabricantes. Aunque el crédito se negocia directamente con cada proveedor, la mayoría acepta diversas modalidades como: transferencias, pagos con tarjeta, e incluso sistemas de <strong>apartado</strong>.
                            </p>
                            <p>
                                Esta flexibilidad le permite asegurar su mercancía con una **inversión inicial menor** y con un menor riesgo de inventario, lo cual es ideal para **negocios nuevos** o con bajo capital de trabajo.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" id="question-5" onclick="openAnswer(event)">
                            <h3>5. ¿Cuánto tiempo tardan los mayoristas en enviar mi pedido de calzado?</h3>
                            <svg id="icon-faq-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                        <div class="faq-answer ans-closed" id="response-5">
                            <p>
                                El tiempo de envío es mucho más rápido en comparación con la producción de fábrica. Dado que los <strong>mayoristas</strong> ya manejan un amplio <strong>inventario</strong> listo,
                                el <strong>tiempo promedio de entrega</strong> es de 24 a 72 horas una vez confirmado el pago. Esto es clave para que pueda reaccionar rápidamente a las tendencias de moda y reabastecer
                                su inventario sin esperas largas.
                            </p>
                        </div>
                    </div>
                </div>
            {{-- end faq --}}

            {{-- subscribe div --}}
            <x-subscribe></x-subscribe>
            {{-- end subscribe div --}}
        @endsection
    </x-layout>
</html>
