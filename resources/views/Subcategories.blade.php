@php
    $description = str_replace(" ", "_", "Conecta con mayoristas de zapato {$subcategory} en Guanajuato! Catálogo completo con precios y contactos Haz negocio ahora.");
@endphp
<x-layout pageTitle="Venta de zapato {{$subcategory}}"  pageDescription={{$description}}>

    @section('main-content')

    <div class="subcatTitle d-flex justify-content-center align-items-center mt-5 pt-5" style="width:100vw; height:50vh">
        <h1>Catálogo de Zapatos {{$subcategory}}</h1>
    </div>

    <div class="d-flex mt-5 mb-5 pb-5 gap-3 flex-wrap justify-content-center">

        @foreach ($models as $model )

            <div class="card" style="width: 18rem;">

                <img src="{{asset('storage/'.$model->modelImage)}}" class="card-img-top" height="350px" alt="{{$model->bizName}}">

                <div>
                    <a href="{{route('Modelo.show', ['modelo'=>$model->modelId])}}">
                        <h5 class="card-title">{{$model->modelName}}</h5>
                    </a>
                </div>

                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">{{$model->saletypeConditions}}</li>
                  <li class="list-group-item">{{$model->modelsubcatName}}</li>
                  <li class="list-group-item">{{$model->modelPrice}}.00</li>
                  <li class="list-group-item">{{$model->bizName}}</li>
                </ul>
            </div>

            @endforeach
    </div>
@endsection
</x-layout>
