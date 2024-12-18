@php
    $description = str_replace(" ", "_", "El catálogo más completo de zapatos en Guanajuato Compra al mayoreo de los mejores fabricantes y surte tu negocio. ¡Aprovecha nuestras ofertas!");
@endphp
<x-layout pageTitle="Catalogo de Calzado" pageDescription={{$description}}>

@section('main-content')
        <div class="d-flex mt-5 justify-content-center">
            <h1>Contacto</h1>
        </div>

        @if (session()->has('Success'))
        <div id="success" class="alert alert-success">
            {{session('Success')}}
        </div>
        @endif

        <div class="col-md-6 offset-3 mb-5">
            <form action="{{route('Mensaje')}}" method="post">
                @csrf
                @method('POST')
                <div class="forn-group mb-2">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" name="name" class="form-control" placeholder="Escribe tu nombre" value="{{old('name')}}">
                    @error('name')
                        <p class="text-danger fs-6">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" name="email" class="form-control" placeholder="Escribe tu Email" value="{{old('email')}}">
                    @error('email')
                        <p class="text-danger fs-6">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="messageContent" class="form-label">Mensaje:</label>
                    <textarea name="messageContent" cols="30" rows="10" class="form-control" placeholder="Escribe tu Mensaje" value="{{old('messageContent')}}"></textarea>
                    @error('messageContent')
                        <p class="text-danger fs-6">{{$message}}</p>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <input type="submit" class="btn btn-sm btn-primario" value="Submit">
                </div>


            </form>
        </div>
@endsection

</x-layout>
