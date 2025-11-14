<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <meta name="robots" content="noindex, nofollow">
            <title> Politica de Privacidad -Compromiso Seguridad Datos | ZapatosGuanajuato.com</title>
            <meta name="description" content="Politica de Privacidad y Seguridad de Datos Uso Directorio de Zapatos Guanajuato.com"/>
            <meta name="keywords" content="Politica de Privacidad de Directorio de Zapatos Guanajuato.com"/>
            <link rel="canonical" href="{{URL::asset('/politica-de-privacidad')}}">
        {{-- end seo --}}

        {{-- images --}}
            <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
        {{-- end images --}}

        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
                <link rel="stylesheet" href="{{ URL::asset('css/privacy-policy.css') }}" /> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/privacy-policy-min.css') }}" />
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

            <div class="privacy-hero">
                <h1> Política de Privacidad</h1>
            </div>
            <div class="privacy-title">
                <h2>La protección de tu privacidad es nuestra máxima prioridad </h2>
            </div>

            <div class="privacy-main-container">
                <div class="privacy-container">
                    <span>
                        <strong>ZapatosGuanajuato.com </strong>toma en serio la privacidad de tu información personal y se compromete a protegerla.
                    </span>
                    <br>
                <span>
                    Esta Política de privacidad explica cómo recopilamos, usamos, divulgamos y almacenamos tu información personal cuando visitas y utilizas nuestro sitio web.
                </span>
                <br>

                <div class="privacy-title">
                    <h3>¿Qué información recopilamos? </h3>
                </div>
                <span>
                    Podemos recopilar los siguientes tipos de información personal tuya:
                </span>
                <span>
                    <ul>
                        <li>Información de contacto:** Nombre, dirección de correo electrónico, número de teléfono, dirección postal.</li>
                        <li>Información de usuario:** Nombre de usuario, contraseña, fecha de nacimiento, datos demográficos (como edad, género, ubicación).</li>
                        <li>Información técnica:** Dirección IP, tipo de navegador, sistema operativo, historial de navegación, información del dispositivo.</li>
                        <li>Información de contenido:** Cualquier contenido que envíes al Sitio web, como comentarios, publicaciones en el foro, reseñas o comentarios.</li>
                    </ul>
                </span>

                <br>
                <div class="privacy-title">
                    <h3>¿Cómo usamos tu información?</h3>
                </div>
                <span>
                    Podemos usar tu información personal para los siguientes fines:
                </span>
                <span>
                    <ul>
                        <li>Brindar y mejorar el Sitio web y sus funciones, incluido contenido y recomendaciones personalizados.</li>
                        <li>Enviarte información importante sobre el Sitio web, como cambios en nuestros términos de servicio o política de privacidad.</li>
                        <li>Enviarte comunicaciones de marketing, como boletines informativos, ofertas promocionales y encuestas (puedes darte de baja de estas comunicaciones en cualquier momento).</li>
                        <li>Analizar tu uso del Sitio web para mejorar nuestros servicios.</li>
                        <li>Cumplir con las obligaciones legales, hacer cumplir nuestras políticas y resolver disputas.</li>
                    </ul>
                </span>

                <span class="alert alert-danger">
                    Nunca venderemos ni compartiremos tu información personal con terceros para sus propios fines de marketing sin tu consentimiento.
                </span>
                <br>

                <div class="privacy-title">
                    <h3>Seguridad de los datos:</h3>
                </div>

                <span>
                    Hemos implementado medidas técnicas y organizativas adecuadas para proteger tu información personal del acceso, divulgación, alteración o destrucción no autorizados. Sin embargo, ningún método de transmisión a través de Internet o método de almacenamiento electrónico es 100% seguro. Por lo tanto, no podemos garantizar la seguridad absoluta de tu información personal.
                </span>
                <br>
                <div class="privacy-title">
                    <h3>Cambios a esta Política de privacidad:</h3>
                </div>
                <span>Podemos actualizar esta Política de privacidad de vez en cuando. </span>
                <span>Te notificaremos los cambios publicando la nueva Política de privacidad en el Sitio web. </span>
                <span>Se te recomienda revisar esta Política de privacidad periódicamente para ver si hay cambios.</span>
                <br>
                <div class="privacy-title">
                    <h3>Transparencia y confianza:</h3>
                </div>
                <span>
                    Entendemos que tu privacidad es importante para ti. Nos comprometemos a ser transparentes sobre cómo recopilamos, usamos y compartimos tu información personal.
                </span>
                <span>
                    Te animamos a que revises esta Política de privacidad cuidadosamente y que te pongas en contacto con nosotros si tienes alguna pregunta o inquietud.
                </span>

                <br>

                </div>



            </div>




        @endsection
    </x-layout>
</html>
