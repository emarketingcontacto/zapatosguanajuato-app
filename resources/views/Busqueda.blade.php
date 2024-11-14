@php
    $description = str_replace("", "_","Buscar en Directorio de Zapatos" );
@endphp

<x-layout pageTitle="Busqueda" pageDescription={{$description}}>

    @section('main-content')
    {{-- <div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');" alt="Catalogo Fabricantes"> --}}
    <div class="header-Category">
        <h1>Busquedas</h1>
    </div>
    <div>
        <div class="container-busquedas">
            @foreach ($results as $result)
            <div class="card" style="width: 18rem;">
                {{-- <img class="card-img-top" src="{{asset('storage/'.$result->bizImage)}}" alt="{{$result->bizName}}" width="150px" height="150px"> --}}
                <img class="card-img-top" src="{{asset('/'.$result->bizImage)}}" alt="{{$result->bizName}}" width="150px" height="150px">

                <div class="card-body">
                  <h5 class="card-title">{{$result->bizName}}</h5>
                  <div class="biz-row-field">
                    <span class="material-symbols-outlined">category</span>
                    <p>Categoria</p>
                  </div>
                  <div class="biz-row-value">
                      <p class="card-text">{{$result->bizcatName}}</p>
                  </div>
                  <div class="card-ref">
                    <a href="{{route('Biz.show', ['biz'=>$result->bizId])}}" class="btn btn-primary">Más información...</a>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
    @endsection
</x-layout>
