@extends('layout')

@section('main-content')

<div class="container mb-5 text-center">
    <div class="row d-flex flex-column justify-center align-content-center">
            <img src="{{asset('storage/'.$modelo->modelImage)}}" height="600vh" width="100vw">
            <p class="fw-strong fs-2 hero-text m-n15">{{$modelo->modelName}}</p>
    </div>

        <div class="row">
            <div class="col text-end text-secondary model-field">Distribuido por:</div>
            <div class="col text-start model-value">
                <a href="{{route('Biz.show', ['biz'=>$biz->bizId])}}">
                    {{$biz->bizName}}
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col text-end text-secondary model-field">Precio</div>
            <div class="col text-start model-value">{{$modelo->modelPrice}}</div>
        </div>

        <div class="row">
            <div class="col text-end text-secondary model-field">Material</div>
            <div class="col text-start model-value">{{$material->materialName}}</div>
        </div>

        <div class="row">
            <div class="col text-end text-secondary model-field">Temporada</div>
            <div class="col text-start model-value">{{$seasson->seassonName}}</div>
        </div>

        <div class="row">
            <div class="col text-end text-secondary model-field">Disponible desde:</div>
            <div class="col text-start model-value">{{$seasson->seassonStart}}</div>

        </div>

        <div class="row">
            <div class="col text-end text-secondary model-field">Hasta</div>
            <div class="col text-start model-value">{{$seasson->seassonEnd}} </div>
        </div>
    </div>
</div>
@endsection
