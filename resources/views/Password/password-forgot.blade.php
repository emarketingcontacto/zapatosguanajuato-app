<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title>User Create | ZapatosGuanajuato.com</title>
            <meta name="description" content="User Create"/>
            <meta name="keywords" content="User Create"/>
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
                <link rel="stylesheet" href="{{ URL::asset('css/admin.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/users.css')}}"> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/admin-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/users-min.css')}}">
            {{-- end online --}}
        {{-- end style --}}

        {{-- scripts --}}
        {{-- end scripts --}}

        {{--Tags --}}
            @include('partials._tags')
        {{--end Tags --}}

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

    <x-layout pageTitle="Management" pageDescription="Login">

        @section('main-content')
            <div class="users-hero">
                <h1>Recuperar Contraseña</h1>
            </div>

            <div class="users-container-control">
                <form action="{{route('requerir-contraseña')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <p>Ingresa el correo con el que te has registrado y te enviaremos un mensaje con instrucciones para recuperar tu registro</p>
                        <input type="email" name="email" class="form-control" placeholder="nombre@dominio.com" value="{{old('email')}}">
                        @error('email')
                            <p class="text-danger fs-6">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <input type="submit" value="Enviar" class="users-button-success">
                    </div>
                </form>

                <a href="{{route('password.reset',['token'])}}">Reset</a>
            </div>
        @endsection
    </x-layout>
</html>
