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
                <link rel="stylesheet" href="{{ URL::asset('css/users.css')}}"> --}}
            {{-- end local
            {{-- online --}}
                <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/users-min.css')}}">
            {{-- end online --}}
        {{-- end style --}}

        {{-- scripts --}}
        {{-- end scripts --}}

        {{--Tags --}}
            @include('partials._tags')
        {{--end Tags --}}

    </head>


<x-layout>

    @section('main-content')

        @if (session()->has('status'))
             <div class="alert alert-success">
                {{$status}}
            </div>
        @endif

        {{-- @session('status')
            <div class="alert alert-success">
                {{$status}}
            </div>
        @endsession --}}

          {{-- @if (session()->has('success'))
                <div id="success" class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif --}}

        <div class="users-hero">
            <h1>Recuperar Contraseña</h1>
        </div>
        <div class="users-form-container">

            <form action="{{route('password-update')}}" method="post">
                @csrf
                @method('POST')
                <div class="form-group mb-2">
                    <label for="email" class="form-label">Correo:</label>
                    <input type="email" name="email" class="form-control" aria-describedby="email" value="@php echo htmlspecialchars($_GET['email']) @endphp">
                    @error('email')
                        <p class="text-danger fs-6">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" name="password" class="form-control" placeholder="Registre su contraseña" value="{{old('password')}}">
                    <p class="users-context-message">La contraseña debe de tener 6 caractéres minímo</p>
                    @error('password')
                        <p class="text-danger fs-6">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="password_confirmation" class="form-label">Confirmar contraseña:</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme su contraseña" value="{{old('password_confirmation')}}">
                    @error('password_confirmation')
                        <p class="text-danger fs-6">{{$message}}</p>
                    @enderror
                </div>

                <input type="hidden" name="token" value="{{$token}}">

                <div class="d-flex justify-content-end mt-2">
                    <input type="submit" value="Enter" class="users-button-success">
                </div>
            </form>
        </div>

    @endsection

</x-layout>

</html>
