<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- style --}}
            {{-- local --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/welcome.css')}}"> --}}
                {{-- <link rel="stylesheet" href="{{ URL::asset('css/error.css')}}"> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/error-min.css')}}">
            {{-- end online --}}
        {{-- end style --}}
    </head>
    <x-layout>
        @section('main-content')
                <div class="error404">
                    <div class="hero-error">
                        <h1>Esta pagina no existe!</h1>
                    </div>
                    <div class="error-text">
                        <p>Te invitamos a visitar las Categorias de nuestro Directorio</p>
                        <a href="{{route('Fabricantes.index')}}">Fabricantes</a>
                        <a href="{{route('Wholesalers.index')}}">Mayoristas</a>
                        <a href="{{route('Retails.index')}}">Minoristas</a>

                    </div>
                </div>
        @endsection
    </x-layout>
</html>
