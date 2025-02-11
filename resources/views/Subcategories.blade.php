@php
    // $description = str_replace(" ", "_", "Conecta con mayoristas de zapato {$subcategory} en Guanajuato! Catálogo completo con precios y contactos Haz negocio ahora.");
    $description = "Conecta con mayoristas de zapato {$subcategory} en Guanajuato! Directorio completo";
@endphp
<x-layout pageTitle="Directorio de zapato {{$subcategory}}"  pageDescription={{$description}}>

    @section('main-content')

    <div class="subcatTitle">
        {{-- <img src="../images/{{$subcategory}}.png"> --}}
        @php
            $strlower = strtolower($subcategory);
        @endphp
        <img src="{{asset('storage/'.$strlower.'.png')}}">
        <h1>Directorio de Zapatos {{$subcategory}}</h1>
    </div>

    <div class="d-flex mt-5 mb-5 pb-5 gap-3 flex-wrap justify-content-center">

        @foreach ($models as $model )

            <div class="card" style="width: 18rem;">

                {{-- <img src="{{asset('storage/'.$model->modelImage)}}" class="card-img-top" height="350px" alt="{{$model->bizName}}"> --}}
                <img src="{{asset('/'.$model->modelImage)}}" class="card-img-top" height="350px" alt="{{$model->bizName}}">

                <div class="card-body">

                        <h5 class="card-title">{{$model->modelName}}</h5>

                </div>

                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">{{$model->saletypeConditions}}</li>
                  <li class="list-group-item">{{$model->modelsubcatName}}</li>
                  <li class="list-group-item" style="currency, currency:'MXN'">${{number_format($model->modelPrice,2,'.',',')}}</li>
                  <li class="list-group-item">{{$model->bizName}}</li>
                </ul>
                <div class="btn-show">
                    <a class="btn btn-sm btn-show form-control" href="{{route('Modelo.show', ['modelo'=>$model->modelId])}}">
                        Ver proveedor...
                    </a>
                </div>
            </div>

            @endforeach
    </div>
@endsection
</x-layout>
