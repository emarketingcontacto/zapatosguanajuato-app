<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title>Venta Calzado al Menudeo Guanajuato Online|ZapatosGuanajuato.com</title>
            <meta name="description" content="Las mejores tiendas online para Comprar Calzado de León Guanajuato al Menudeo. Modelos de moda, Envío a todo México Venta por Internet. ¡Compra directa!"/>
            <meta name="keywords" content="comprar calzado de león online, zapatos guanajuato tiendas, venta de calzado al menudeo, marcas de calzado de león, calzado con envío a México, zapatos de moda online"/>
            <link rel="canonical" href="{{URL::asset('/minoristas-calzado-guanajuato')}}">
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
            <div class="category-header" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');">
                <h1>Comprar Calzado de León Guanajuato al Menudeo</h1>
                {{-- call to action --}}
                @include('partials._call-to-action')
                {{-- end call to action --}}
            </div>
            {{-- intro text --}}
            <div class="categories-intro-container">
                <div class="categories-intro">
                    <h2>Tiendas de Calzado en Guanajuato: Venta por Catálogo y Compras en Línea</h2>
                    <p>
                        Bienvenido al directorio de <strong>minoristas de calzado</strong> de Guanajuato. Esta sección está diseñada para el <strong>consumidor final</strong> que busca <strong>comprar zapatos</strong>
                        de alta calidad a precios minoristas competitivos, ya sea en tiendas físicas o a través de <strong>catálogos</strong> y plataformas en línea.
                    </p>
                    <p>
                        Nuestros minoristas asociados ofrecen las <strong>últimas colecciones</strong> en todos los estilos, desde calzado formal hasta deportivo. Aquí encontrará <strong>tiendas de zapatos en línea
                            </strong> que garantizan un proceso de compra fácil y seguro, con envíos a todo México y la posibilidad de explorar el calzado por catálogo digital.
                    </p>
                    <p>
                        Olvídese de la complejidad de la venta por volumen y acceda directamente a los <strong>precios finales</strong> de los modelos de moda. La comodidad de la <strong>compra en línea</strong>
                        se une a la calidad inigualable de la piel de Guanajuato.
                    </p>
                    <p>
                        Explore nuestro listado y encuentre esa marca o zapato exclusivo que está buscando.
                    </p>
                </div>
            </div>
            {{-- end intro text --}}


            <div class="categories-pages-submenu">
                {{-- submenu-categories --}}
                    @include('partials._submenu-categories', ['selectedCategory'=>'Retails'])
                {{-- end submenu-categories --}}

                {{-- submenu Genero --}}
                    <x-search-model-category bizcategory="Retails" genero=""></x-search-model-category>
                {{-- end submenu Genero --}}

                {{-- Search Model Categories --}}
                    {{-- <x-search-model-category bizcategory="Retails"></x-search-model-category> --}}
                {{-- End Search Model Categories --}}
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
                                    </svg>
                                    <p>{{$biz->bizcatName}}</p>
                                </div>
                                {{--end BizCatName--}}

                                {{-- modelCategoriesList--}}
                                    <x-ModelCategoriesList :bizID="$biz->bizId"></x-ModelCategoriesList>
                                {{-- end modelCategoriesList--}}
                                <hr style="margin:0">
                                <div class="btn-show">
                                    <a href="{{route('Retails.showRetailer', ['biz'=>$biz->bizSlug])}}" class="btn btn-sm  btn-show form-control">
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
                    <h2>Preguntas Frecuentes para Compradores Minoristas (Bajo Volumen)</h2>

                    <div class="faq-item">

                        <div class="faq-question" id="question-1" onclick="openAnswer(event)">
                            <h3>1. ¿Cuál es el Mínimo de Compra (MOQ) que debo esperar de los proveedores listados?</h3>
                            <svg id="icon-faq-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>

                        <div class="faq-answer ans-closed" id="response-1">
                            <p>
                                La mayoría de los fabricantes que ofrecen precios de fábrica (los más bajos) exigen un MOQ alto (Minimo de Compra), típicamente entre 12 y 36 pares por modelo/color. Sin embargo, en nuestro directorio también encontrará:
                            </p>
                            <ul>
                                <li><strong>Mayoristas y Distribuidores:</strong> Estos proveedores compran grandes volúmenes y revenden. Ellos suelen aceptar MOQs mucho más flexibles, a partir de <strong> 6 pares (media corrida) </strong>o incluso <strong> pares sueltos</strong>, aunque el precio unitario será ligeramente superior al de fábrica.</li>
                                <li><strong>Fabricantes que Aceptan "Surtido":</strong> Algunos fabricantes más pequeños pueden permitirle comprar diferentes modelos hasta alcanzar el MOQ total de la compra.</li>
                            </ul>
                            <p>Le recomendamos usar los filtros de nuestro directorio para encontrar proveedores con políticas de MOQ flexibles.</p>

                        </div>
                    </div>

                    <div class="faq-item">

                        <div class="faq-question" id="question-2" onclick="openAnswer(event)">
                            <h3>2. ¿Puedo comprar "números sueltos" o elegir tallas específicas?</h3>
                            <svg id="icon-faq-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>

                        <div class="faq-answer ans-closed" id="response-2">
                            <p>La compra de calzado se clasifica en:</p>
                            <ul>
                                <li>
                                   <strong>Corrida Completa:</strong> (Ej. tallas del 2 al 7, 12 pares en total). Es la opción más común de fábrica y garantiza el precio más bajo.
                                </li>
                                <li>
                                    <strong>Números Sueltos o Surtido:</strong> Es posible comprar tallas específicas. Para lograr esto, debe buscar:
                                    <ul>
                                        <li><strong>Bodegas de Mayoreo:</strong> Que ya tienen inventario en stock.</li>
                                        <li><strong>Distribuidores:</strong> Que manejan inventario fragmentado.</li>
                                    </ul>
                                </li>
                            </ul>
                            <p>Comprar números sueltos siempre tendrá un costo por par más alto que una corrida completa, debido a los costos logísticos y de almacenamiento del proveedor.</p>
                        </div>

                    </div>

                    <div class="faq-item">

                        <div class="faq-question" id="question-3" onclick="openAnswer(event)">
                            <h3>3. ¿Cómo puedo asegurar la calidad del calzado antes de hacer un pedido grande?</h3>
                            <svg id="icon-faq-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>

                        <div class="faq-answer ans-closed" id="response-3">
                            <p>Para minimizar el riesgo de compra, le sugerimos seguir estos pasos:</p>
                            <ol>
                                <li><strong>Pedir Muestras:</strong>Siempre solicite al proveedor la compra de una muestra del modelo que le interesa. Esto le permitirá evaluar los materiales, la mano de obra y el ajuste.</li>
                                <li><strong>Verificar Reseñas:</strong>Busque reseñas o referencias de otros minoristas sobre el proveedor dentro y fuera de nuestro directorio.</li>
                                <li><strong>Condiciones de Pago Claras:</strong> Negocie condiciones de pago que protejan su inversión, como pagos parciales o pagos finales contra entrega (si es posible).</li>
                            </ol>
                        </div>

                    </div>

                    <div class="faq-item">

                        <div class="faq-question" id="question-4" onclick="openAnswer(event)">
                            <h3>4. ¿Los precios mostrados en el directorio son el costo final del par?</h3>
                            <svg id="icon-faq-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>

                         <div class="faq-answer ans-closed" id="response-4">
                            <p>No siempre. El precio final puede variar según:</p>
                            <ul>
                                <li><strong>Volumen de Compra:</strong> A mayor volumen, mejor precio unitario.</li>
                                <li><strong>Impuestos:</strong> Los precios pueden ser antes de IVA u otros impuestos aplicables.</li>
                                <li><strong>Costo de Envío:</strong> Siempre pregunte si el precio cotizado incluye el costo de envío a su destino, o si debe cubrirlo aparte.</li>
                            </ul>
                            <p>Asegúrese de especificar claramente el volumen que necesita al solicitar una cotización para obtener el precio final con todos los cargos incluidos.</p>
                         </div>

                    </div>

                    <div class="faq-item">
                        <div class="faq-question" id="question-5" onclick="openAnswer(event)">
                            <h3>5. ¿Qué tipos de calzado puedo encontrar en Guanajuato?</h3>
                            <svg id="icon-faq-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>

                        <div class="faq-answer ans-closed" id="response-5">
                            <p>En Guanajuato encontrará una vasta oferta en:</p>
                            <ul>
                                <li><strong>Calzado de Piel y Cuero:</strong> Botas, botines, zapatos de vestir.</li>
                                <li><strong>Calzado Industrial y de Seguridad.</strong></li>
                                <li><strong>Tenis y Calzado Deportivo.</strong></li>
                                <li><strong>Calzado Infantil.</strong></li>
                                <li><strong>Mano de Obra Especializada:</strong> Marroquinería (bolsos y carteras).</li>
                            </ul>
                            <p>Utilice nuestro sistema de filtros por categoría y material para optimizar su búsqueda.</p>
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
