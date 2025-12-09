<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title>Registro de Nuevo Usuario | ZapatosGuanajuato.com</title>
            <meta name="description" content="Registro de Nuevos Usuarios - Únete hoy mismo y mantente siempre a la vanguardia en el mundo del Calzado en Guanajuato."/>
            <meta name="keywords" content="Registro de Nuevos Usuarios ZapatosGuanajuato.com"/>
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
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/newsletter.css')}}"> --}}

            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/admin-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/newsletter-min.css')}}">

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
    <x-layout>

        @section('main-content')
            <div class="admin-hero">
                <h1 class="text-center"> Registro Nuevos Usuarios</h1>
            </div>

            <div class="newsletter-container">
                <h2>¡No te pierdas nada del calzado de Guanajuato!</h2>
                <p>¿Eres un apasionado de los zapatos?</p>
                <p>¿Te encanta descubrir las últimas tendencias y los mejores descuentos?</p>
                <p>¡Entonces ZapatosGuanajuato.com es para tí!</p>
                <ul>
                    <li>Noticias exclusivas del sector calzado en Guanajuato.</li>
                    <li>Promociones y descuentos especiales de tus marcas favoritas.</li>
                    <li>Lanzamientos de nuevos modelos y colecciones antes que nadie.</li>
                    <li>Información privilegiada sobre las empresas más destacadas en la producción y comercialización </li>
                </ul>
                <h3 id="text-attention">¡Únete hoy mismo y mantente siempre a la vanguardia en el mundo del Calzado en Guanajuato!</h3>
            </div>

            <div class="newsletter-container-control">
                <form method="POST" action="{{route('User.store')}}">
                @csrf
                @method('POST')
                    <div class="mb-3">
                        <input type="hidden" name="intended_action" value={{session('intended_action')}}>
                        <input type="hidden" name="intended_proveedor" value={{session('intended_proveedor')}}>
                        <input type="hidden" name="registration_source" value={{session('registration_source')}}>
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control w-25" disabled>
                    </div>

                    <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text"  name="name" class="form-control" value={{old('name')}}>
                            {{-- <p class="form-text">Debe tener una longitud mínima de 3 caracteres</p> --}}
                        {{-- Error --}}
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email"  name="email" class="form-control" value={{old('email')}}>
                        {{-- Error --}}
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password"  name="password" class="form-control" value={{old('password')}}>
                            <p class="form-text">Debe tener una longitud mínima de 6 caracteres</p>

                            {{-- Error --}}
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmación de contraseña</label>
                            <input type="password"  name="password_confirmation" class="form-control">
                            <p class="form-text">Debe tener una longitud mínima de 6 caracteres</p>

                            {{-- Error --}}
                            @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="newsletter-control-buttons">
                        <button type="submit" class="newsletter-button-success">Registrar</button>
                        {{-- <a href="/User/login" class="btn btn-sm btn-success">Login</a> --}}
                        <a href="{{route('welcome')}}" class="newsletter-button-cancel">Cancelar</a>
                    </div>
                    <br>
                    <div class="mb-3 text-center">
                       <a href="{{route('User.login')}}">Ya estoy registrado</a>
                    </div>
                </form>
            </div>



        @endsection

    </x-layout>
</html>
