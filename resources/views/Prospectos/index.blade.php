<link rel="stylesheet" href="{{URL::asset('css/prospects.css')}}"/>
<x-layout pageTitle="Prospectos" pageDescription="Prospectos" keywords="Prospectos-index">
    @section('main-content')
    <div class="main-container">
        <div class="header-crud">
           <h1>Prospectos</h1>
        </div>

        <div class="prospectos-crear">
            <a href="{{route('Prospectos.create')}}" class="button">Crear</a>
        </div>


        <div class="table-container">
            @if (session()->has('success'))
                <div id="success" class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            <table class="table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Contacto</th>
                        <th>Email</th>
                        <th>Negocio</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Tipo</th>
                        <th>Tipo Calzado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($prospects as $prospect)
                            <td>{{$prospect->prospectoId}}</td>
                            <td>{{$prospect->prospectoContacto}}</td>
                            <td>{{$prospect->prospectoEmail}}</td>
                            <td>{{$prospect->prospectoNegocio}}</td>
                            <td>{{$prospect->prospectoDireccion}}</td>
                            <td>{{$prospect->prospectoTelefono}}</td>
                            <td>{{$prospect->prospectoTipoNegocio}}</td>
                            <td>{{$prospect->prospectoTipoCalzado}}</td>
                            <td>
                                <a href="{{route('Prospectos.show', ['prospecto'=>$prospect->prospectoId])}}" class="btn btn-sm btn-primary">Ver</a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="links">
            {{$prospects->links()}}
        </div>
    </div>
    @endsection
</x-layout>
