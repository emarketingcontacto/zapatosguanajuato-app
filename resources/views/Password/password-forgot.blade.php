<x-layout pageTitle="Management" pageDescription="Login">

    @section('main-content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <h1>Recuperar Contraseña</h1>
        </div>
    </div>

    <div class="col-md-6 offset-3">
        <form action="{{route('requerir-contraseña')}}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="email" class="form-label">Correo:</label>
                <input type="email" name="email" class="form-control" placeholder="Ingrese su Correo" value="{{old('email')}}">
                @error('email')
                    <p class="text-danger fs-6">{{$message}}</p>
                @enderror
            </div>

            <div class="d-flex justify-content-center mt-3">
                <input type="submit" value="Enviar" class="btn btn-sm btn-main">
            </div>
        </form>
    </div>


    @endsection

</x-layout>
