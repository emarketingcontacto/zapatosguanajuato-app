<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    {{-- seo --}}
        <title>Premium Create | ZapatosGuanajuato.com</title>
        <meta name="description" content="Premium Create"/>
        <meta name="keywords" content="Premium Create"/>
    {{-- end seo --}}

    {{-- canonical --}}
        <script>
            const canonicalUrl = window.location.href;
            const link = document.createElement('link');
            link.rel = 'canonical';
            link.href = canonicalUrl;
            document.head.appendChild(link);
        </script>
    {{-- end canonical --}}

    {{-- images --}}
        <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    {{-- end images --}}

    {{-- style --}}
        {{-- local --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
            <link rel="stylesheet" href="{{ URL::asset('css/admin.css')}}"> --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/premium.css')}}"> --}}
        {{-- end local
        {{-- online --}}
            <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                    <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                    <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                    <link rel="stylesheet" href="{{ URL::asset('css/online/admin-min.css')}}">
                    <link rel="stylesheet" href="{{ URL::asset('css/online/premium-min.css')}}">
        {{-- end online --}}
    {{-- end style --}}

    {{-- scripts --}}
        {{-- sripts local --}}
            {{-- <script src="{{URL::asset('/scripts/script.js')}}" defer></script> --}}
            {{-- <script src="{{URL::asset('/scripts/premium.js')}}" defer></script> --}}
        {{-- end sripts local--}}
        {{-- scripts online --}}
            <script src="{{URL::asset('/scripts/online/premium-min.js')}}"></script>
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
            <div class="admin-hero">
                <h1>Proveedores Premium</h1>
            </div>
            <div class="premium-container">
                <div class="premium-intro">
                    <h3 style="text-align: center">Membresia Premium</h3>
                    <h4 style="text-align: center">Más Exposición, más Oportunidades</h4>
                    <p>
                        La membresía <strong>Premium</strong> te brinda la oportunidad de darle más ventajas a tu negocio
                    </p>
                    <ul>
                        <li>Posicionamiento en primera posición de tu categoria</li>
                        <li>Micrositio de tu tienda optimizado SEO</li>
                        <li>Ficha Google My Business optimizado Local-SEO</li>
                        <li>Sin limites de modelos</li>
                        <li>Exposición en la página principal</li>
                        <li>E-mail mensual a todos nuestros usuarios con las novedades de tu Negocio</li>
                        <li>Contacto Directo a tu WhatsApp de Ventas</li>
                        <li>Cancela cuando quieras</li>
                    </ul>

                    <h5 style="text-align: center">Vende más, vende más rápido, vende mejor!</h5>
                </div>
                <div class="premium-status">
                    <div class="premium-registrado">
                        <label for="registrados">Ya estoy registrado</label>
                        <input type="radio" name="registrado" id="registrado" onchange=openStatus(event)>
                    </div>
                    <div class="premium-noregistrado">
                        <label for="no-registrado">No estoy registrado</label>
                        <input type="radio" name="registrado" id="no-registrado" onchange=openStatus(event)>
                    </div>
                </div>

                <div class="premium-registrados" id='premiumRegistrados'>
                    <div class="premium-container-control">
                        <form action="{{route('Premium.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <h3 class="premium-form-header">Registro Proveedor Premium</h3>
                            </div>

                            <div class="row">
                                <div class="col col-extensible">
                                    <label for="bizName" class="form-control">Productor</label>
                                    <select name="bizId" id="selectBizId" class="form-control premium-dropdown" onchange=getBizCat()>
                                        <option value="">--Seleccione su Negocio--</option>
                                        @foreach ($bizness as $biz)
                                            <option value="{{$biz->bizId}}">{{$biz->bizName}}</option>
                                        @endforeach
                                        {{--error --}}
                                        @error('bizId')
                                            <div class="alert alert-danger">{{ $message}}</div>
                                        @enderror
                                    </select>
                                </div>
                                <div class="col col-extensible">
                                    <label for="bizcatName" class="form-control">Categoria</label>
                                    <input type="text" name="bizcatName" id="bizcatName" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="row">
                                    {{-- bizcatID --}}
                                    <input type="text" name="bizcatId" id="bizcatId" class="form-control" hidden>
                                        {{--error --}}
                                        @error('bizcatId')
                                            <div class="alert alert-danger">{{ $message}}</div>
                                        @enderror
                            </div>

                             <div class="row row-period">
                                <div>
                                    <fieldset>
                                        <legend>Escoge el periodo</legend>
                                        <input type="radio" name="premiumPeriod" id="premiumDate" value="1mes" onclick=openPeriod(event)>
                                            <label for="1mes">1 Mes</label>
                                        <input type="radio" name="premiumPeriod" id="premiumDate" value="1año" onclick=openPeriod(event) style="margin-left: 2vw;">
                                            <label for="1mes">1 Año</label>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-extensible">
                                    <label for="premiumStart" class="form-control">Inicio</label>
                                    <input type="date" class="form-control" value="{{now()->format('Y-m-d')}}" name="premiumStart" id="premiumStart" readonly >
                                    {{--error --}}
                                    @error('premiumStart')
                                        <div class="alert alert-danger">{{ $message}}</div>
                                    @enderror
                                </div>
                                <div class="col col-extensible">
                                    <label for="premiumEnd" class="form-control">Final</label>
                                    <input type="date" class="form-control" value="{{old('premiumEnd')}}" name="premiumEnd" id="premiumEnd" readonly>
                                    {{--error --}}
                                    @error('premiumEnd')
                                        <div class="alert alert-danger">{{ $message}}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- periodo mensual --}}
                            <div class="premium-periodos">
                                {{-- periodo anual --}}
                                <div class="premium-period" id="month" style="display: none">
                                    Costo ($350.00) M.N.
                                </div>
                                <div class="premium-period" id="year" style="display: none">
                                {{-- periodo mensual --}}
                                    Costo ($3,500.00) M.N.
                                </div>
                            </div>
                            {{-- control  --}}
                            <div class="premium-control-buttons">
                                <input type="submit" value="Registro Premium" class="btn-premium-submit">
                                <a href="{{route('welcome')}}" class="btn-premium-cancel">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="premium-noregistrados" id="premiumNoRegistrados">
                    <p>
                        Necesitas estar registrado dentro del catálogo de proveedores para poder añadirte como Proveedor Premium
                    </p>
                    <a href="{{route('Prospectos.create')}}" class="btn-premium-noregistrados">Registro Proveedor</a>
                </div>
            </div>
        @endsection
    </x-layout>
</html>
