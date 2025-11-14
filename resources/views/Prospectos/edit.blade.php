<link rel="stylesheet" href="{{URL::asset('css/prospects.css')}}"/>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    {{-- seo --}}
        <title>Prospectos Editar | ZapatosGuanajuato.com</title>
        <meta name="description" content="Prospectos Editar"/>
        <meta name="keywords" content="Prospectos Editar"/>
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
        {{-- end local
        {{-- online --}}
            <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/admin-min.css')}}">
        {{-- end online --}}
    {{-- end style --}}

    {{-- scripts --}}
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
            <h1>Editar Prospecto</h1>
            </div>

            <div class="admin-container-control">
                <form action="{{route('Prospectos.update', ['prospecto'=>$prospect->prospectoId])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Id --}}
                <div class="row">
                    <div class="col">
                        <label for="prospectoId" class="form-label">ID:</label>
                    </div>
                    <div class="col">
                        <input type="number" name="prospectoId" class="form-control" value="{{$prospect->prospectoId}}" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoNegocio" class="form-label">Nombre del Negocio:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoNegocio" class="form-control" value="{{$prospect->prospectoNegocio}}">
                        {{-- Error --}}
                        @error('prospectoNegocio')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoContacto" class="form-label">Nombre del Contacto:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoContacto" class="form-control" value="{{$prospect->prospectoContacto}}">
                        {{-- Error --}}
                        @error('prospectoContacto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoTelefono" class="form-label">Teléfono:</label>
                    </div>
                    <div class="col">
                        <input type="tel" name="prospectoTelefono" class="form-control" value="{{$prospect->prospectoTelefono}}">
                        {{-- Error --}}
                        @error('prospectoTelefono')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoEmail" class="form-label">Correo:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoEmail" class="form-control" value="{{$prospect->prospectoEmail}}">
                        {{-- Error --}}
                        @error('prospectoEmail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoDireccion" class="form-label">Calle y Número:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoDireccion" class="form-control" value="{{$prospect->prospectoDireccion}}">
                        {{-- Error --}}
                        @error('prospectoDireccion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoColonia" class="form-label">Colonia:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoColonia" class="form-control" value="{{$prospect->prospectoColonia}}">
                        {{-- Error --}}
                        @error('prospectoColonia')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoCiudad" class="form-label">Ciudad:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoCiudad" class="form-control" value="{{$prospect->prospectoCiudad}}">
                        {{-- Error --}}
                        @error('prospectoCiudad')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoTipoNegocio" class="form-label">Tipo de Negocio:</label>
                    </div>
                    <div class="col">
                        <Select class="form-control" name="prospectoTipoNegocio">
                            <option value="">--Seleccionar--</option>
                                @if ($prospect->prospectoTipoNegocio === "Fabricante")
                                    <option value="Fabricante" selected>Fabricante</option>
                                @else
                                    <option value="Fabricante">Fabricante</option>
                                @endif

                                @if($prospect->prospectoTipoNegocio === "Mayorista")
                                    <option value="Mayorista" selected>Mayorista</option>
                                @else
                                    <option value="Mayorista">Mayorista</option>
                                @endif

                                @if($prospect->prospectoTipoNegocio === "Minorista")
                                    <option value="Minorista" selected>Minorista</option>
                                @else
                                    <option value="Minorista">Minorista</option>
                                @endif
                        </Select>
                        {{-- Error --}}
                        @error('prospectoTipoNegocio')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoTipoCalzado" class="form-label">Tipo de Calzado:</label>
                    </div>
                    <div class="col">
                        <select name="prospectoTipoCalzado" class="form-control">
                            <option value="">-- Seleccionar --</option>
                            @if ($prospect->prospectoTipoCalzado === "Formal")
                                <option value="Formal" selected>Formal</option>
                            @else
                                <option value="Formal">Formal</option>
                            @endif

                            @if ($prospect->prospectoTipoCalzado === "Casual")
                                <option value="Casual" selected>Casual</option>
                            @else
                                <option value="Casual">Casual</option>
                            @endif

                            @if ($prospect->prospectoTipoCalzado === "Tenis")
                                <option value="Tenis" selected>Tenis</option>
                            @else
                                <option value="Tenis">Tenis</option>

                            @endif

                            @if ($prospect->prospectoTipoCalzado === "Tacones")
                                <option value="Tacones" selected>Tacones</option>
                            @else
                                <option value="Tacones">Tacones</option>
                            @endif

                            @if ($prospect->prospectoTipoCalzado === "Botas")
                                <option value="Botas" selected>Botas</option>
                            @else
                                <option value="Botas" >Botas</option>
                            @endif

                            @if ($prospect->prospectoTipoCalzado === "Trabajo")
                                <option value="Trabajo" selected>Trabajo</option>
                            @else
                                <option value="Trabajo" >Trabajo</option>
                            @endif

                            @if ($prospect->prospectoTipoCalzado === "Ortopédico")
                                <option value="Ortopédico" selected>Ortopédico</option>
                            @else
                                <option value="Ortopédico">Ortopédico</option>
                            @endif
                        </select>
                        {{-- Error --}}
                        @error('prospectoTipoCalzado')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="prospectoCondiciones" class="form-label">Condiciones de Negocio:</label>
                    </div>
                    <div class="col">
                        <select name="prospectoCondiciones" class="form-control">
                            <option value="">-- Seleccionar --</option>

                            @if ($prospect->prospectoCondiciones === "Corridas Extrictas")
                                <option value="Corridas Extrictas" selected>Corridas mismo estilo y color</option>
                            @else
                                <option value="Corridas Extrictas">Corridas mismo estilo y color</option>
                            @endif

                            @if ($prospect->prospectoCondiciones === "Medias Corridas Extrictas")
                                <option value="Medias Corridas Extrictas" selected>Medias Corridas mismo estilo y color</option>
                            @else
                                <option value="Medias Corridas Extrictas">Medias Corridas mismo estilo y color</option>
                            @endif

                            @if ($prospect->prospectoCondiciones === "Corridas Flexibles")
                                <option value="Corridas Flexibles" selected>Corridas diferente estilo y color</option>
                            @else
                                <option value="Corridas Flexibles">Corridas diferente estilo y color</option>
                            @endif

                            @if ($prospect->prospectoCondiciones === "Medias Corridas Flexibles")
                                <option value="Medias Corridas Flexibles" selected>Corridas diferente estilo y color</option>
                            @else
                                <option value="Medias Corridas Flexibles">Corridas diferente estilo y color</option>
                            @endif

                            @if ($prospect->prospectoCondiciones === "Menudeo")
                                <option value="Menudeo" selected>Menudeo</option>
                            @else
                                <option value="Menudeo">Menudeo</option>
                            @endif

                        </select>
                        {{-- Error --}}
                        @error('prospectoCondiciones')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoImagen" class="form-label">Logo / Acceso / Iterna</label>
                    </div>
                    <div class="col">

                        {{-- local --}}
                        <img name="prospectoImagen" src="{{asset('storage/'.$prospect->prospectoImagen)}}" height="200px" width="200px">
                        {{-- online --}}
                        {{-- <img src="{{asset('/'.$prospect->prospectoImagen)}}" height="500px" width="500px"> --}}

                        <input type="file" name="prospectoImagen" class="form-control" value="{{$prospect->prospectoImagen}}">
                        {{-- Error --}}
                        @error('prospectoImage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- controls --}}
                <div class="admin-control-buttons" >
                        <input type="submit" value="Update" class="btn btn-sm btn-primary">
                        <a href="{{route('welcome')}}" class="btn btn-sm btn-warning">Cancel</a>
                    </form>
                        <form action="{{route('Prospectos.destroy', ['prospecto'=>$prospect->prospectoId])}}" method="post" onsubmit=" return confirm('Are you sure?')">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Eliminar" class="btn btn-sm btn-danger w-25">
                        </form>
                </div>

            </div>


        @endsection
    </x-layout>

</html>
