{{-- @extends('layout') --}}

<x-layout pageTitle={{$subcategory}}>




    @section('main-content')
    <div class="d-flex mt-5 mb-5 pb-5 gap-3 flex-wrap justify-content-center">
            @foreach ($models as $model )
            <div class="card" style="width: 18rem;">
                <img src="{{asset('storage/'.$model->modelImage)}}" class="card-img-top" height="350px" alt="...">
                <div class="card-body">
                    <a href="{{route('Modelo.show', ['modelo'=>$model->modelId])}}" class="btn btn-sm btn-show form-control">
                        <h5 class="card-title">{{$model->modelName}}</h5>
                    </a>

                  <p class="card-text">{{$model->saletypeConditions}}</p>
                </div>
                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">{{$model->modelsubcatName}}</li>
                  <li class="list-group-item">{{$model->modelPrice}}.00</li>
                  <li class="list-group-item">{{$model->bizName}}</li>
                </ul>
                <div class="card-body mt-3">
                    <div class="btn-show">
                      <a href="{{route('Modelo.show', ['modelo'=>$model->modelId])}}" class="btn btn-sm btn-show form-control">{{$model->modelName}}</a>
                    </div>
                </div>
              </div>
            @endforeach
    </div>
@endsection
</x-layout>
