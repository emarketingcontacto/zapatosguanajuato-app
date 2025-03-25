@php
    // $description = str_replace("", "_","Buscar en Directorio de Zapatos" );
    $description = "Encuentra a los mejores proveedores de calzado y haz negocio de manera segura, práctica y fácil";

@endphp

<x-layout pageTitle="Busqueda" pageDescription={{$description}}>

    @section('main-content')
    {{-- <div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');" alt="Catalogo Fabricantes"> --}}
    <div class="header-Category">
        <h1>Busquedas</h1>
    </div>

        <div class="container-busquedas">
            @foreach ($results as $result)
            <div class="card" style="width: 18rem;">
                {{--local--}}
                {{-- <img class="card-img-top" src="{{asset('storage/'.$result->bizImage)}}" alt="{{$result->bizName}}" width="150px" height="150px"> --}}
                {{--online --}}
                <img class="card-img-top" src="{{asset('/'.$result->bizImage)}}" alt="{{$result->bizName}}" width="150px" height="150px">
                <div class="card-body">
                  <h5 class="card-title">{{$result->bizName}}</h5>
                  <div class="biz-row-field">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                        <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                      </svg>
                      <p class="card-text">{{$result->bizcatName}}</p>
                  </div>
                  <div class="container-busqueda-ref">
                    <a href="{{route('Biz.show', ['biz'=>$result->bizId])}}">Más información...</a>
                  </div>
                </div>
              </div>
            @endforeach
        </div>

    @endsection
</x-layout>
