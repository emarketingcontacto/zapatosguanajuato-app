<x-layout pageTitle="Management" pageDescription="Login" keywords="Login">

    @section('main-content')
    <div class="d-flex justify-content-center mt-5">
        <h1>Login</h1>
    </div>

    <div class="col-md-6 offset-3">

        <form method="POST" action="{{route('User.authenticate')}}">
            @csrf
            @method('POST')

            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email"  name="email" class="form-control" value="{{old('email')}}" placeholder="Ingrese su correo electrónico">
            {{-- Error --}}
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="mb-3 form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password"  name="password" class="form-control" value="{{old('password')}}" placeholder="Ingrese su contraseña">
                <p class="form-text">La contraseña debe tener 6 caractéres minímo</p>

                {{-- Error --}}
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-evenly">
                <button type="submit" class="btn btn-sm btn-primary">Acceso</button>
                <a href="/Register" class="btn btn-sm btn-success">Registro</a>
                <a href="/User" class="btn btn-sm btn-danger">Cancelar</a>
                <a href="{{route('recuperar-contrasena')}}">Recuperar Contraseña</a>
            </div>

        </form>
    </div>
    @endsection

</x-layout>
