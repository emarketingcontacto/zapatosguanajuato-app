<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    {{-- seo --}}
        <meta name="robots" content="noindex, nofollow">
        <title> Contacto Directo - Directorio de Zapatos Guanajuato.com | ZapatosGuanajuato.com</title>
        <meta name="description" content="Envia un Mensaje para Contactar al CEO Directorio de Zapatos Guanajuato.com"/>
        <meta name="keywords" content="Contacto de Directorio de Zapatos Guanajuato.com"/>
        <link rel="canonical" href="{{URL::asset('/contacto')}}">
    {{-- end seo --}}

    {{-- images --}}
        <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    {{-- end images --}}

    {{-- style --}}
        {{-- local --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/contact.css') }}" /> --}}
        {{-- end local
        {{-- online --}}
            <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/contact-min.css')}}">
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
        <div class="contacto-hero">
            <h1>Contacto</h1>
        </div>

        @if (session()->has('Success'))
        <div id="success" class="alert alert-success">
            {{session('Success')}}
        </div>
        @endif

        <div class="contact-container">
            <div class="contact-form">
                <form action="{{route('Mensaje')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" class="form-control" placeholder="Escribe tu nombre" value="{{old('name')}}">
                        @error('name')
                            <p class="text-danger fs-6">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Escribe tu Email" value="{{old('email')}}">
                        @error('email')
                            <p class="text-danger fs-6">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="messageContent" class="form-label">Mensaje:</label>
                        <textarea name="messageContent" cols="30" rows="10" class="form-control" placeholder="Escribe tu Mensaje" value="{{old('messageContent')}}"></textarea>
                        @error('messageContent')
                            <p class="text-danger fs-6">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="contact-control">
                        <input type="submit" class="btn-contact" value="Enviar">
                    </div>
                </form>

            </div>

        </div>
@endsection

</x-layout>

</html>
