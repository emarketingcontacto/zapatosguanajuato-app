<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title>Fabricantes Calzado Guanajuato: Venta Directa de Fábrica | ZapatosGuanajuato</title>
            <meta name="keywords" content="Encuentra fabricantes de calzado en Guanajuato confiables a precio de directo de fábrica"/>
            <meta name="description" content="Directorio completo de Fabricantes de Calzado en Guanajuato. ¡Encuentra los mejores precios de Mayoreo Venta Directa de Fábrica sin intermediarios!"/>
            <link rel="canonical" href="{{URL::asset('/fabricantes-calzado-guanajuato')}}">
        {{-- end seo --}}

        {{-- images --}}
            <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
            <link rel="preload" as="image" href="{{URL::asset('storage/'.$bizcat->bizcatImage)}}">
            {{-- <link rel="preload" as="image" href="{{URL::asset('images/img_index_small.avif') }}"> --}}
        {{-- end images --}}

        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/categories-pages.css') }}" /> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/categories-pages-min.css') }}"/>
            {{-- end online --}}
        {{-- end style --}}

        {{-- scripts --}}
        <script src="{{URL::asset('scripts/factories.js')}}" defer></script>
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
            <div class="category-header" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');" alt="DirectorioFabricantes">
                <h1>Fabricantes de Calzado en Guanajuato </h1>
                {{-- call to action --}}
                    @include('partials._call-to-action')
                {{-- end call to action --}}
            </div>

            <div class="categories-intro-container">
                <div class="categories-intro">
                    <h2>Fábricas de Calzado en Guanajuato: Producción por Volumen y Maquila</h2>
                    <p>
                        Si su negocio requiere establecer una <strong> línea de producción de marca blanca</strong> o manejar altos volúmenes de inventario, nuestros proveedores garantizan <strong>precios de planta</strong>
                         competitivos. La negociación directa con el <strong>productor</strong> asegura la mejor tarifa para pedidos grandes, optimizando su cadena de suministro.
                    </p>
                    <p>
                        Explore nuestro directorio de <strong> fábricas de zapatos</strong> y conéctese con su próximo socio de negocios. Olvídese de las limitaciones de los
                        <strong>bajos mínimos</strong> y empiece a trabajar a escala industrial.
                    </p>
                </div>
            </div>

            <div class="categories-pages-submenu">
                {{-- submenu-categories --}}
                    @include('partials._submenu-categories', ['selectedCategory'=>'Fabricantes'])
                {{-- end submenu-categories --}}

                {{-- submenu Genero --}}
                    <x-search-model-category bizcategory="Fabricantes" genero=""></x-search-model-category>
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
                        <h3 class="card-title">{{$biz->bizName}}</h3>
                        <div class="card-body card-text">
                            {{--BizCatName--}}
                            <div class="biz-row-catname">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                                        <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                    <p>{{$biz->bizcatName}}</p>
                            </div>
                            {{--end BizCatName--}}


                            {{-- modelCategoriesList--}}
                                <x-ModelCategoriesList :bizID="$biz->bizId"></x-ModelCategoriesList>
                            {{-- end modelCategoriesList--}}
                            <div class="btn-show">
                                <a href="{{route('Fabricantes.showFabricante', ['biz'=>$biz->bizSlug])}}" class="btn btn-sm form-control">
                                    Ver Detalles...
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- end Biz Items --}}

            {{-- Preguntas frecuentes --}}
                <div class="faq-section">
                    <h2>Preguntas Frecuentes sobre Compra a Fabricantes de Calzado en Guanajuato</h2>

                    <div class="faq-item">

                        <div class="faq-question" id="question-1" onclick="openAnswer(event)">
                            <h3>1. ¿Cuál es el Mínimo de Compra (MOQ) Requerido por los Fabricantes para Precios de Fábrica?</h3>
                                <svg id="icon-faq-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                    <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                </svg>
                        </div>

                        <div class="faq-answer ans-closed" id="response-1">
                            <p id="response-1">Para acceder al precio de <strong>venta directa de fábrica</strong>, los <strong>fabricantes de calzado</strong> exigen un Mínimo de Compra (MOQ) alto, típicamente entre 12 a 36 pares
                                por modelo y color. Es crucial entender que estas compras se hacen usualmente por <strong>"corrida completa"</strong> (todos los números consecutivos), sin posibilidad de surtir
                                tallas sueltas, garantizando así el precio más bajo.
                            </p>
                        </div>

                    </div>

                    <div class="faq-item">

                        <div class="faq-question" id="question-2" onclick="openAnswer(event)">
                            <h3>2. ¿Los Fabricantes permiten la compra de modelos o tallas mixtas en un mismo pedido, y qué es una "Corrida Completa"?</h3>
                            <svg id="icon-faq-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                        <div class="faq-answer ans-closed " id="response-2">
                            <p>Generalmente, <strong>No</strong>. La condición principal para comprar a un <strong>fabricante</strong> es adquirir la <strong>Corrida Completa</strong>. Este término significa que
                                usted debe comprar <strong>todos los números consecutivos</strong> de un mismo modelo y color, tal como salen de la línea de producción (ej. 2, 3, 4, 5, y 6, o 5, 6, 7 y 8).
                                Comprar por <strong>corrida</strong> permite al <strong>productor</strong> maximizar su eficiencia y es la razón principal por la que puede ofrecer el precio más bajo, ya que evita
                                el "desconchado" de inventario.
                            </p>
                            <p>Si su negocio requiere una alta variedad de tallas y <strong>modelos mixtos</strong>, le recomendamos visitar nuestro <strong>Directorio de Mayoristas</strong>, quienes sí ofrecen esa flexibilidad a un precio ligeramente superior.</p>
                        </div>

                    </div>

                    <div class="faq-item">
                        <div class="faq-question" id="question-3" onclick="openAnswer(event)">
                            <h3>3. ¿Qué políticas de pago y producción maneja la Venta Directa de Fábrica?</h3>
                            <svg id="icon-faq-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>

                        <div class="faq-answer ans-closed" id="response-3">
                            <p>Los términos de pago son más rigurosos. Dado que se trata de <strong>producción bajo pedido</strong> y <strong>precios de costo</strong>, la mayoría de los <strong>fabricantes de Guanajuato</strong> solicitan un anticipo de entre el 50% y el 70% para iniciar la producción, con el saldo liquidado antes del envío. Los tiempos de entrega pueden variar entre 2 y 6 semanas, dependiendo del volumen y la disponibilidad de material.</p>
                        </div>

                    </div>

                    <div class="faq-item">
                        <div class="faq-question" id="question-4" onclick="openAnswer(event)">
                            <h3>4. ¿Ofrecen los Fabricantes garantía de calidad o por defectos de manufactura?</h3>
                            <svg id="icon-faq-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                        <div class="faq-answer ans-closed" id="response-4">
                            <p>Sí, la <strong>garantía de un fabricante</strong> cubre únicamente <strong>defectos de fabricación</strong> (suela despegada, costuras rotas) por un período limitado
                                (7 a 15 días tras la recepción). Es fundamental revisar la mercancía al recibirla y reportar cualquier incidencia con evidencia fotográfica.
                                La garantía <strong>no aplica</strong> para cambios de modelo, talla o color una vez que el pedido ha sido surtido.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" id="question-5" onclick="openAnswer(event)">
                            <h3>5. ¿Es posible solicitar la Fabricación de un modelo o marca propia (Maquila)?</h3>
                            <svg id="icon-faq-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </div>
                        <div class="faq-answer ans-closed" id="response-5">
                            <p>Sí, muchos de los <strong>fabricantes de calzado</strong> listados ofrecen el servicio de <strong>Maquila (Fabricación de marca blanca)</strong>. Este servicio exige el volumen de
                                compra más alto de todos, ya que el fabricante debe incurrir en costos de moldes, hormas y patrones nuevos. Los pedidos de maquila tenian volúmenes mínimos que superaban los 100 pares por modelo.
                                Sin embargo esto ha cambiado en los últimos años y te sugerimos contactar al fabricante y solicitar la compra mínima para este tipo de negociación.
                            </p>
                        </div>

                    </div>
                </div>
            {{-- Preguntas frecuentes --}}

            {{-- subscribe div --}}
            <x-subscribe></x-subscribe>
            {{-- end subscribe div --}}

        @endsection
    </x-layout>

</html>
