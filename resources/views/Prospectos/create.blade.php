<link rel="stylesheet" href="{{URL::asset('css/prospects.css')}}"/>
<x-layout pageTitle="Prospectos" pageDescription="Prospectos" keywords="Prospectos-create">
    @section('main-content')
    <div class="main-container">
        <div class="header-crud">
           <h1>Añadir Nuevo Negocio</h1>
        </div>

        <div class="header-message-container">
            <div class="header-message">
                <h2>¡Qué gusto que quieras sumar tu negocio a ZapatosGuanajuato.com!</h2>
                <p>Para asegurar que tu empresa tenga la mejor presencia posible y que nuestros usuarios encuentren lo que buscan,
                    es crucial que completes todos los campos de registro.</p>
                <p>Además, nuestro equipo se contactará contigo para verificar la información y confirmar que estás listo para operar.</p>
                <p>Es indispensable que llenes cada uno de ellos para que tu negocio sea visible y atractivo para nuestros usuarios.</p>
                <p>Una vez que envíes tu información, el equipo de ZapatosGuanajuato.com se comunicará para:</p>
                <div class="list-items">
                    <ul>
                        <li>Confirmar los datos de tu negocio.</li>
                        <li>Asegurarse de que estás listo para levantar pedidos y hacer negocios con los clientes.
                        <li> Este paso es fundamental para garantizar una buena experiencia tanto para los usuarios como para los negocios.</li>
                    </ul>
                </div>
                <p>Una vez que acredites que estás listo para operar, tu negocio será aprobado y estará en línea,
                    visible para todos los visitantes de ZapatosGuanajuato.com.</p>
                <h2>¡Gracias por querer ser parte de la comunidad de ZapatosGuanajuato.com! </h2>
                <small>Si tienes alguna duda durante el proceso, no dudes en contactar a nuestro equipo de soporte.</small>
            </div>
        </div>

        <div class="form-container">
            <form action="{{route('Prospectos.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                {{-- Id --}}
            {{-- <div class="row row-form">
                <div class="col">
                    <label for="prospectoId" class="form-label" style="visibility: hidden">ID:</label>
                </div>
                <div class="col">
                    <input type="number" name="prospectoId" class="form-control" style="visibility: hidden">
                </div>
            </div> --}}

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoNegocio" class="form-label">Nombre del Negocio:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoNegocio" class="form-control" value="{{old('prospectoNegocio')}}">
                    {{-- Error --}}
                    @error('prospectoNegocio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoContacto" class="form-label">Nombre del Contacto:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoContacto" class="form-control" value="{{old('prospectoContacto')}}">
                    {{-- Error --}}
                    @error('prospectoContacto')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoTelefono" class="form-label">Teléfono:</label>
                </div>
                <div class="col">
                    <input type="tel" name="prospectoTelefono" class="form-control" value="{{old('prospectoTelefono')}}">
                    {{-- Error --}}
                    @error('prospectoTelefono')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoEmail" class="form-label">Correo:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoEmail" class="form-control" value="{{old('prospectoEmail')}}">
                    {{-- Error --}}
                    @error('prospectoEmail')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoDireccion" class="form-label">Calle y Número:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoDireccion" class="form-control" value="{{old('prospectoDireccion')}}">
                    {{-- Error --}}
                    @error('prospectoDireccion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoColonia" class="form-label">Colonia:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoColonia" class="form-control" value="{{old('prospectoColonia')}}">
                    {{-- Error --}}
                    @error('prospectoColonia')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoCiudad" class="form-label">Ciudad:</label>
                </div>
                <div class="col">
                    <input type="text" name="prospectoCiudad" class="form-control" value="{{old('prospectoCiudad')}}">
                    {{-- Error --}}
                    @error('prospectoCiudad')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoTipoNegocio" class="form-label">Tipo de Negocio:</label>
                </div>
                <div class="col">
                    <Select class="form-control" name="prospectoTipoNegocio">
                        <option value="">--Seleccionar--</option>
                        <option value="Fabricante">Fabricante</option>
                        <option value="Mayorista">Mayorista</option>
                        <option value="Minorista">Minorista</option>
                    </Select>
                    {{-- Error --}}
                    @error('prospectoTipoNegocio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoTipoCalzado" class="form-label">Tipo de Calzado:</label>
                </div>
                <div class="col">
                    <select name="prospectoTipoCalzado" class="form-control">
                        <option value="">-- Seleccionar --</option>
                        <option value="Formal">Formal</option>
                        <option value="Casual">Casual</option>
                        <option value="Tenis">Tenis</option>
                        <option value="Tacones">Tacones</option>
                        <option value="Botas">Botas</option>
                        <option value="Trabajo">Trabajo</option>
                        <option value="Ortopédico">Ortopédico</option>
                    </select>
                    {{-- Error --}}
                    @error('prospectoTipoCalzado')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoCondiciones" class="form-label">Condiciones de Negocio:</label>
                </div>
                <div class="col">
                    <select name="prospectoCondiciones" class="form-control">
                        <option value="">-- Seleccionar --</option>
                        <option value="Corridas Extrictas">Corridas mismo estilo y color</option>
                        <option value="Medias Corridas Extrictas">Medias Corridas mismo estilo y color</option>
                        <option value="Corridas Flexibles">Corridas diferente estilo y color</option>
                        <option value="Medias Corridas Flexibles">Corridas diferente estilo y color</option>
                        <option value="Menudeo">Menudeo</option>
                    </select>
                    {{-- Error --}}
                    @error('prospectoCondiciones')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row row-form">
                <div class="col">
                    <label for="prospectoImagen" class="form-label">Logo / Acceso / Iterna</label>
                </div>
                <div class="col">
                    <input type="file" name="prospectoImagen" class="form-control" value="{{old('prospectoImagen')}}">
                    {{-- Error --}}
                    @error('prospectoImage')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- controls --}}
            <div class="row row-form">
                <div class="col">
                    <input type="submit" value="Guardar" class="btn btn-sm btn-primary">
                </div>
                <div class="col">
                    <a href="{{route('welcome')}}" class="btn btn-sm btn-danger">Cancelar</a>
                </div>
            </div>

            </form>

        </div>

    </div>
    @endsection
</x-layout>
