<link rel="stylesheet" href="{{URL::asset('css/prospects.css')}}"/>
<x-layout pageTitle="Prospectos" pageDescription="Prospectos" keywords="Prospectos-show">
    @section('main-content')
    <div class="main-container">
        <div class="header-crud">
           <h1>Ver Prospectos</h1>
        </div>

          <div class="form-container">
            <div class="data-container">
                <div class="row">
                    <div class="col">
                        <label for="prospectoId" class="form-label">ID:</label>
                    </div>
                    <div class="col">
                        <input type="number" name="prospectoId" class="form-control" disabled value="{{$prospect->prospectoId}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoNegocio" class="form-label">Nombre del Negocio:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoNegocio" class="form-control" value="{{$prospect->prospectoNegocio}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoContacto" class="form-label">Nombre del Contacto:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoContacto" class="form-control" value="{{$prospect->prospectoContacto}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoTelefono" class="form-label">Teléfono:</label>
                    </div>
                    <div class="col">
                        <input type="tel" name="prospectoTelefono" class="form-control" value="{{$prospect->prospectoTelefono}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoEmail" class="form-label">Correo:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoEmail" class="form-control" value="{{$prospect->prospectoEmail}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoDireccion" class="form-label">Calle y Número:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoDireccion" class="form-control" value="{{$prospect->prospectoDireccion}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoColonia" class="form-label">Colonia:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoColonia" class="form-control" value="{{$prospect->prospectoColonia}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoCiudad" class="form-label">Ciudad:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoCiudad" class="form-control" value="{{$prospect->prospectoCiudad}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoTipoNegocio" class="form-label">Tipo de Negocio:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoTipoNegocio" class="form-control" value="{{$prospect->prospectoTipoNegocio}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoTipoCalzado" class="form-label">Tipo de Calzado:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoTipoCalzado" class="form-control" value="{{$prospect->prospectoTipoCalzado}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="prospectoCondiciones" class="form-label">Condiciones de Negocio:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="prospectoCondiciones" value="{{$prospect->prospectoCondiciones}}" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="prospectoImagen" class="form-label">Logo / Acceso / Iterna</label>
                    </div>
                    <div class="col">
                        {{-- local --}}
                          <img src="{{asset('storage/'.$prospect->prospectoImagen)}}" height="200px" width="200px">
                        {{-- online --}}
                        {{-- <img src="{{asset('/'.$prospect->prospectoImagen)}}" height="500px" width="500px"> --}}
                    </div>
                </div>

                {{-- controls --}}
                <div class="row controls">
                    <div class="col">
                        <a href="{{route('Prospectos.edit', [$prospect->prospectoId])}}" class="btn btn-sm btn-primary" style="width: 20vw">Editar</a>
                    </div>
                    <div class="col">
                        <a href="{{route('Prospectos.index')}}" class="btn btn-sm btn-danger">Cancel</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
    @endsection
</x-layout>
