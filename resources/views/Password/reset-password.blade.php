<x-layout pageTitle="Zapatos Guanajuato" pageDescription="Recuperar Contreseña">

    @section('main-content')

        <div class="d-flex justify-content-center">
            <h1>Recuperar Contraseña</h1>
        </div>

        <div class="col-md-6 offset-3">
            <form action="" method="post">
                @csrf
                @method('POST')

                <div class="form-group mb-2">
                    <label for="email" class="form-label">Correo:</label>
                    <input type="email" name="email" class="form-control" placeholder="Registre su correo" value="{{old('email')}}">
                    @error('email')
                        <p class="text-danger fs-6">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" name="password" class="form-control" placeholder="Registre su contraseña" value="{{old('password')}}">
                    <p class="text-muted fs-5">La contraseña debe de tener 6 caractéres minímo</p>
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

                <input type="hidden" name="token">

                <div class="d-flex justify-content-end mt-2">
                    <input type="submit" value="Enter" class="btn btn-sm btn-main">
                </div>

            </form>
        </div>

    @endsection

</x-layout>
