@php
    // $description = str_replace(" ", "_", "Conecta con mayoristas de zapato {$subcategory} en Guanajuato! Catálogo completo con precios y contactos Haz negocio ahora.");
    $description = "Descubre el mayor directorio de fabricantes, mayoristas y menudistas de zapato {$subcategoria}. Explora imágenes de modelos exclusivos y encuentra fácilmente los contactos directos para tus compras al por mayor o detalle";
    $keywords = "Directorio de zapato {$subcategoria}, zapato {$subcategoria} a precio de fabrica";
@endphp
<x-layout pageTitle="Directorio de zapatos {{$subcategoria}}"  pageDescription={{$description}} keywords={{$keywords}}>

    @section('main-content')

    <div class="subcatTitle">
        {{-- local --}}
        <img src="../images/{{$subcategoria}}.png">
        @php
            $strlower = strtolower($subcategoria);
        @endphp
        {{-- online --}}
        {{-- <img src="{{asset('storage/'.$strlower.'.png')}}"> --}}
        <h1>Directorio de Zapatos {{$subcategoria}}</h1>
    </div>

    {{-- menu categories --}}
    <div class="subcategories-menu-div">
        <div class="subcategories-menu">
            <a href="#fabricantes">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                    <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                  </svg>
                <p>Fabricantes</p>
            </a>
            <a href="#mayoristas">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                    <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.5 2.5 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354z"/>
                    <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708z"/>
                  </svg>
                <p>Mayoristas</p>
            </a>
            <a href="#minoristas">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                    <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                  </svg>
                <p>Minoristas</p>
            </a>

        </div>
    </div>
    {{-- end menu categories --}}


    {{-- factories --}}
    <div class="models-subcategories-div">
        <div class="models-subcategorie-subtitle" id="fabricantes">
            <h3>Fabricantes</h3>
        </div>
    </div>
    <div class="d-flex mt-5 mb-5 pb-5 gap-3 flex-wrap justify-content-center">
        @foreach ($modelsfactories as $modelfactory )
            <div class="card" style="width: 18rem;">
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$model->modelImage)}}" class="card-img-top" height="350px" alt="{{$model->bizName}}"> --}}
                {{-- online --}}
                <img src="{{asset('/'.$modelfactory->modelImage)}}" class="card-img-top" height="350px" alt="{{$modelfactory->bizName}}">
                <div class="card-body">
                    <h5 class="card-title">{{$modelfactory->modelName}}</h5>
                </div>
                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">{{$modelfactory->saletypeConditions}}</li>
                  <li class="list-group-item">{{$modelfactory->modelsubcatName}}</li>
                  <li class="list-group-item" style="currency, currency:'MXN'">${{number_format($modelfactory->modelPrice,2,'.',',')}}</li>
                  <li class="list-group-item">{{$modelfactory->bizName}}</li>
                  <li class="list-group-item">{{$modelfactory->bizcatName}}</li>
                </ul>
                <div class="btn-show">
                    <a class="btn btn-sm btn-show form-control" href="{{route('Modelo.show', ['modelo'=>$modelfactory->modelId])}}">
                        Detalles del modelo...
                    </a>
                </div>
            </div>
            @endforeach
    </div>
    {{-- end factories --}}

    {{-- wholesalers --}}
    <div class="models-subcategories-div">
        <div class="models-subcategorie-subtitle" id="mayoristas">
            <h3>mayoristas</h3>
        </div>
    </div>
    <div class="d-flex mt-5 mb-5 pb-5 gap-3 flex-wrap justify-content-center">
        @foreach ($modelsWholesalers as $modelwholsale )
            <div class="card" style="width: 18rem;">
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$model->modelImage)}}" class="card-img-top" height="350px" alt="{{$model->bizName}}"> --}}
                {{-- online --}}
                <img src="{{asset('/'.$modelwholsale->modelImage)}}" class="card-img-top" height="350px" alt="{{$modelwholsale->bizName}}">
                <div class="card-body">
                    <h5 class="card-title">{{$modelwholsale->modelName}}</h5>
                </div>
                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">{{$modelwholsale->saletypeConditions}}</li>
                  <li class="list-group-item">{{$modelwholsale->modelsubcatName}}</li>
                  <li class="list-group-item" style="currency, currency:'MXN'">${{number_format($modelwholsale->modelPrice,2,'.',',')}}</li>
                  <li class="list-group-item">{{$modelwholsale->bizName}}</li>
                  <li class="list-group-item">{{$modelwholsale->bizcatName}}</li>
                </ul>
                <div class="btn-show">
                    <a class="btn btn-sm btn-show form-control" href="{{route('Modelo.show', ['modelo'=>$modelwholsale->modelId])}}">
                        Detalles del modelo...
                    </a>
                </div>
            </div>
            @endforeach
    </div>
    {{-- end wholesalers --}}

     {{-- retails --}}
     <div class="models-subcategories-div">
        <div class="models-subcategorie-subtitle" id="minoristas">
            <h3>Minoristas</h3>
        </div>
    </div>
    <div class="d-flex mt-5 mb-5 pb-5 gap-3 flex-wrap justify-content-center">
        @foreach ($modelsRetails as $modelRetail )
            <div class="card" style="width: 18rem;">
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$model->modelImage)}}" class="card-img-top" height="350px" alt="{{$model->bizName}}"> --}}
                {{-- online --}}
                <img src="{{asset('/'.$modelRetail->modelImage)}}" class="card-img-top" height="350px" alt="{{$modelRetail->bizName}}">
                <div class="card-body">
                    <h5 class="card-title">{{$modelRetail->modelName}}</h5>
                </div>
                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">{{$modelRetail->saletypeConditions}}</li>
                  <li class="list-group-item">{{$modelRetail->modelsubcatName}}</li>
                  <li class="list-group-item" style="currency, currency:'MXN'">${{number_format($modelRetail->modelPrice,2,'.',',')}}</li>
                  <li class="list-group-item">{{$modelRetail->bizName}}</li>
                  <li class="list-group-item">{{$modelRetail->bizcatName}}</li>
                </ul>
                <div class="btn-show">
                    <a class="btn btn-sm btn-show form-control" href="{{route('Modelo.show', ['modelo'=>$modelRetail->modelId])}}">
                        Detalles del modelo...
                    </a>
                </div>
            </div>
            @endforeach
    </div>
    {{-- end retails --}}

@endsection
</x-layout>
