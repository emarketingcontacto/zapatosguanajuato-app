<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">

    {{-- seo --}}
        <meta name="description" content="Anunciantes Crear"/>
        <meta name="keywords" content="Anunciantes Crear"/>
        <title> Anunciantes | ZapatosGuanajuato.com</title>
        <link rel="canonical" href="https://zapatosguanajuato.com/prospectos/create">
    {{-- end seo --}}

    {{-- images --}}
        <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    {{-- end images --}}

    {{-- style --}}
        {{-- local --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
            {{-- <link rel="stylesheet" href="{{URL::asset('css/prospects.css')}}"/> --}}
        {{-- end local
        {{-- online --}}
            <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/prospects-min.css')}}">
        {{-- end online --}}
    {{-- end style --}}

    {{-- scripts --}}
        {{-- sripts local --}}
            <script src="{{URL::asset('/scripts/advertiser.js')}}" defer></script>
        {{-- end sripts local--}}
        {{-- scripts online --}}
            {{-- <script src="{{URL::asset('/scripts/online/advertiser-min.js')}}"></script> --}}
        {{-- end scripts online --}}
    {{-- end scripts --}}

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
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KZP9TGP6');
        </script>
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

            <div class="prospectos-hero">
            <h1>Añadir Nuevo Negocio</h1>
            </div>

            <div class="header-message-container">
                <div class="header-message">
                    <h2>¡Qué gusto que quieras sumar tu negocio a ZapatosGuanajuato.com!</h2>
                    <p>Para asegurar que tu empresa tenga la mejor presencia posible y que nuestros usuarios encuentren lo que buscan,
                        es crucial que completes todos los campos de registro.</p>
                    <p>Además, nuestro equipo se contactará contigo para verificar la información y confirmar que estás listo para operar.</p>
                    <p>Es indispensable que llenes cada uno de ellos para que tu negocio sea visible y atractivo para nuestros usuarios.</p>
                    <p>Una vez que envíes tu información, el equipo de ZapatosGuanajuato.com se comunicará para:</p>

                    <div class="list-items">
                        <ul>
                            <li>Confirmar los datos de tu negocio.</li>
                            <li>Asegurarse de que estás listo para levantar pedidos y hacer negocios con los clientes.
                            <li> Este paso es fundamental para garantizar una buena experiencia tanto para los usuarios como para los negocios.</li>
                        </ul>
                    </div>
                    <div class="prospectos-after-acreditation">
                        <p>Una vez que acredites que estás listo para operar, tu negocio será aprobado y estará en línea,
                        visible para todos los visitantes de ZapatosGuanajuato.com.</p>
                        <h2>¡Gracias por querer ser parte de la comunidad de ZapatosGuanajuato.com! </h2>
                        <small>Si tienes alguna duda durante el proceso, no dudes en contactar a nuestro equipo de soporte.</small>
                    </div>
                </div>
            </div>

            <div class="prospectos-form-container">
                <form action="{{route('Prospectos.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    {{-- Id --}}
                {{-- <div class="row row-form">
                    <div class="col">
                        <label for="prospectoId" class="form-label" style="visibility: hidden">ID:</label>
                    </div>
                    <div class="col">
                        <input type="number" name="prospectoId" class="form-control" style="visibility: hidden">
                    </div>
                </div> --}}

                <div class="row row-form row-form-title">
                    <h3>Registro Gratis</h3>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoNegocio" class="form-label">Nombre del Negocio:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoNegocio" class="form-control" value="{{old('prospectoNegocio')}}">
                        {{-- Error --}}
                        @error('prospectoNegocio')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoContacto" class="form-label">Nombre del Contacto:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoContacto" class="form-control" value="{{old('prospectoContacto')}}">
                        {{-- Error --}}
                        @error('prospectoContacto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoTelefono" class="form-label">Teléfono:</label>
                    </div>
                    <div class="col">
                        <input type="tel" name="prospectoTelefono" class="form-control" value="{{old('prospectoTelefono')}}">
                        {{-- Error --}}
                        @error('prospectoTelefono')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoEmail" class="form-label">Correo:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoEmail" class="form-control" value="{{old('prospectoEmail')}}">
                        {{-- Error --}}
                        @error('prospectoEmail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoDireccion" class="form-label">Calle y Número:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoDireccion" class="form-control" value="{{old('prospectoDireccion')}}">
                        {{-- Error --}}
                        @error('prospectoDireccion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoColonia" class="form-label">Colonia:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoColonia" class="form-control" value="{{old('prospectoColonia')}}">
                        {{-- Error --}}
                        @error('prospectoColonia')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoCiudad" class="form-label">Ciudad:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoCiudad" class="form-control" value="{{old('prospectoCiudad')}}">
                        {{-- Error --}}
                        @error('prospectoCiudad')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoTipoNegocio" class="form-label">Tipo de Negocio:</label>
                    </div>
                    <div class="col">
                        <Select class="form-control" name="prospectoTipoNegocio">
                            <option value="">--Seleccionar--</option>
                            <option value="Fabricante">Fabricante</option>
                            <option value="Mayorista">Mayorista</option>
                            <option value="Minorista">Minorista</option>
                        </Select>
                        {{-- Error --}}
                        @error('prospectoTipoNegocio')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoTipoCalzado" class="form-label">Tipo de Calzado:</label>
                    </div>
                    <div class="col">
                        <select name="prospectoTipoCalzado" class="form-control">
                            <option value="">-- Seleccionar --</option>
                            <option value="Formal">Formal</option>
                            <option value="Casual">Casual</option>
                            <option value="Tenis">Tenis</option>
                            <option value="Tacones">Tacones</option>
                            <option value="Botas">Botas</option>
                            <option value="Trabajo">Trabajo</option>
                            <option value="Ortopédico">Ortopédico</option>
                        </select>
                        {{-- Error --}}
                        @error('prospectoTipoCalzado')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoCondiciones" class="form-label">Condiciones de Negocio:</label>
                    </div>
                    <div class="col">
                        <select name="prospectoCondiciones" class="form-control">
                            <option value="">-- Seleccionar --</option>
                            <option value="Corridas Extrictas">Corridas mismo estilo y color</option>
                             <option value="Corridas Flexibles">Corridas diferente estilo y color</option>
                            <option value="Medias Corridas Extrictas">Medias Corridas mismo estilo y color</option>
                            <option value="Medias Corridas Flexibles">Medias Corridas diferente estilo y color</option>
                            <option value="Menudeo">Menudeo</option>
                        </select>
                        {{-- Error --}}
                        @error('prospectoCondiciones')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="prospectoImagen" class="form-label">Logo</label>
                    </div>
                    <div class="col">
                        <input type="file" name="prospectoImagen" class="form-control" value="{{old('prospectoImagen')}}">
                        {{-- Error --}}
                        @error('prospectoImagen')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- controls --}}
                <div class="row row-form">
                    <div class="col prospectos-controls">
                        <input type="submit" value="Guardar" class="prospectos-btn prospectos-btn-guardar">
                    </div>
                    <div class="col prospectos-controls">
                        <a href="{{route('welcome')}}" class="prospectos-btn prospectos-btn-cancelar">Cancelar</a>
                    </div>
                </div>

                </form>

            </div>


        @endsection
    </x-layout>

</html>
