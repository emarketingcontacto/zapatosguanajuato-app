<link rel="stylesheet" href="{{URL::asset('css/prospects.css')}}"/>
<x-layout pageTitle="Prospectos" pageDescription="Prospectos" keywords="Prospectos-create">
    @section('main-content')
    <div class="main-container">
        <div class="header-crud">
           <h1>Nuevo Prospecto</h1>
        </div>

        <div class="form-container">
            <form action="{{route('Prospectos.update', ['prospecto'=>$prospect->prospectoId])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Id --}}
            <div class="row">
                <div class="col">
                    <label for="prospectoId" class="form-label">ID:</label>
                </div>
                <div class="col">
                    <input type="number" name="prospectoId" class="form-control" value="{{$prospect->prospectoId}}" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoNegocio" class="form-label">Nombre del Negocio:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoNegocio" class="form-control" value="{{$prospect->prospectoNegocio}}">
                    {{-- Error --}}
                    @error('prospectoNegocio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoContacto" class="form-label">Nombre del Contacto:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoContacto" class="form-control" value="{{$prospect->prospectoContacto}}">
                    {{-- Error --}}
                    @error('prospectoContacto')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoTelefono" class="form-label">Teléfono:</label>
                </div>
                <div class="col">
                    <input type="tel" name="prospectoTelefono" class="form-control" value="{{$prospect->prospectoTelefono}}">
                    {{-- Error --}}
                    @error('prospectoTelefono')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoEmail" class="form-label">Correo:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoEmail" class="form-control" value="{{$prospect->prospectoEmail}}">
                    {{-- Error --}}
                    @error('prospectoEmail')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoDireccion" class="form-label">Calle y Número:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoDireccion" class="form-control" value="{{$prospect->prospectoDireccion}}">
                    {{-- Error --}}
                    @error('prospectoDireccion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoColonia" class="form-label">Colonia:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoColonia" class="form-control" value="{{$prospect->prospectoColonia}}">
                    {{-- Error --}}
                    @error('prospectoColonia')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoCiudad" class="form-label">Ciudad:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoCiudad" class="form-control" value="{{$prospect->prospectoCiudad}}">
                    {{-- Error --}}
                    @error('prospectoCiudad')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoTipoNegocio" class="form-label">Tipo de Negocio:</label>
                </div>
                <div class="col">
                    <Select class="form-control" name="prospectoTipoNegocio">
                        <option value="">--Seleccionar--</option>
                            @if ($prospect->prospectoTipoNegocio === "Fabricante")
                                <option value="Fabricante" selected>Fabricante</option>
                            @else
                                <option value="Fabricante">Fabricante</option>
                            @endif

                            @if($prospect->prospectoTipoNegocio === "Mayorista")
                                <option value="Mayorista" selected>Mayorista</option>
                            @else
                                <option value="Mayorista">Mayorista</option>
                            @endif

                            @if($prospect->prospectoTipoNegocio === "Minorista")
                                <option value="Minorista" selected>Minorista</option>
                            @else
                                <option value="Minorista">Minorista</option>
                            @endif
                    </Select>
                    {{-- Error --}}
                    @error('prospectoTipoNegocio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoTipoCalzado" class="form-label">Tipo de Calzado:</label>
                </div>
                <div class="col">
                    <select name="prospectoTipoCalzado" class="form-control">
                        <option value="">-- Seleccionar --</option>
                        @if ($prospect->prospectoTipoCalzado === "Formal")
                            <option value="Formal" selected>Formal</option>
                        @else
                            <option value="Formal">Formal</option>
                        @endif

                        @if ($prospect->prospectoTipoCalzado === "Casual")
                            <option value="Casual" selected>Casual</option>
                        @else
                            <option value="Casual">Casual</option>
                        @endif

                        @if ($prospect->prospectoTipoCalzado === "Tenis")
                            <option value="Tenis" selected>Tenis</option>
                        @else
                            <option value="Tenis">Tenis</option>

                        @endif

                        @if ($prospect->prospectoTipoCalzado === "Tacones")
                            <option value="Tacones" selected>Tacones</option>
                        @else
                            <option value="Tacones">Tacones</option>
                        @endif

                        @if ($prospect->prospectoTipoCalzado === "Botas")
                            <option value="Botas" selected>Botas</option>
                        @else
                            <option value="Botas" >Botas</option>
                        @endif

                        @if ($prospect->prospectoTipoCalzado === "Trabajo")
                            <option value="Trabajo" selected>Trabajo</option>
                        @else
                            <option value="Trabajo" >Trabajo</option>
                        @endif

                        @if ($prospect->prospectoTipoCalzado === "Ortopédico")
                            <option value="Ortopédico" selected>Ortopédico</option>
                        @else
                            <option value="Ortopédico">Ortopédico</option>
                        @endif
                    </select>
                    {{-- Error --}}
                    @error('prospectoTipoCalzado')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="prospectoCondiciones" class="form-label">Condiciones de Negocio:</label>
                </div>
                <div class="col">
                    <select name="prospectoCondiciones" class="form-control">
                        <option value="">-- Seleccionar --</option>

                        @if ($prospect->prospectoCondiciones === "Corridas Extrictas")
                            <option value="Corridas Extrictas" selected>Corridas mismo estilo y color</option>
                        @else
                            <option value="Corridas Extrictas">Corridas mismo estilo y color</option>
                        @endif

                        @if ($prospect->prospectoCondiciones === "Medias Corridas Extrictas")
                            <option value="Medias Corridas Extrictas" selected>Medias Corridas mismo estilo y color</option>
                        @else
                            <option value="Medias Corridas Extrictas">Medias Corridas mismo estilo y color</option>
                        @endif

                        @if ($prospect->prospectoCondiciones === "Corridas Flexibles")
                            <option value="Corridas Flexibles" selected>Corridas diferente estilo y color</option>
                        @else
                            <option value="Corridas Flexibles">Corridas diferente estilo y color</option>
                        @endif

                        @if ($prospect->prospectoCondiciones === "Medias Corridas Flexibles")
                            <option value="Medias Corridas Flexibles" selected>Corridas diferente estilo y color</option>
                        @else
                            <option value="Medias Corridas Flexibles">Corridas diferente estilo y color</option>
                        @endif

                        @if ($prospect->prospectoCondiciones === "Menudeo")
                            <option value="Menudeo" selected>Menudeo</option>
                        @else
                            <option value="Menudeo">Menudeo</option>
                        @endif

                    </select>
                    {{-- Error --}}
                    @error('prospectoCondiciones')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prospectoImagen" class="form-label">Logo / Acceso / Iterna</label>
                </div>
                <div class="col">

                    {{-- local --}}
                    <img name="prospectoImagen" src="{{asset('storage/'.$prospect->prospectoImagen)}}" height="200px" width="200px">
                    {{-- online --}}
                    {{-- <img src="{{asset('/'.$prospect->prospectoImagen)}}" height="500px" width="500px"> --}}

                    <input type="file" name="prospectoImagen" class="form-control" value="{{$prospect->prospectoImagen}}">
                    {{-- Error --}}
                    @error('prospectoImage')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- controls --}}
            <div class="row" >
                <div class="col">
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
                </div>
                <div class="col">
                    <a href="{{route('welcome')}}" class="btn btn-sm btn-warinig">Cancel</a>
                </div>
            </form>
                <div class="col">
                    <form action="{{route('Prospectos.destroy', ['prospecto'=>$prospect->prospectoId])}}" method="post" onsubmit=" return confirm('Are you sure?')">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger">
                    </form>
                </div>
        </div>

        </div>

    </div>
    @endsection
</x-layout>
