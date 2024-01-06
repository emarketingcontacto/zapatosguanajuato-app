@extends('layout')

@section('main-content')

<div class="container mb-5 text-center">
    <div class="row d-flex flex-column justify-center align-content-center">
            <img src="{{asset('storage/'.$modelo->modelImage)}}" height="100%" width="100%">
            <p class="fw-strong fs-2 hero-text m-n15">{{$modelo->modelName}}</p>
    </div>

        <div class="row">
            <div class="col text-end">Distribuido por:</div>
            <div class="col text-start biz-col-value">
                <a href="{{route('Biz.show', ['biz'=>$biz->bizId])}}">
                    {{$biz->bizName}}
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col text-end text-secondary">Precio</div>
            <div class="col text-start biz-col-value">{{$modelo->modelPrice}}</div>
        </div>

        <div class="row">
            <div class="col text-end text-secondary">Material</div>
            <div class="col text-start biz-col-value">{{$material->materialName}}</div>
        </div>

        <div class="row">
            <div class="col text-end text-secondary">Temporada</div>
            <div class="col text-start biz-col-value">{{$seasson->seassonName}}</div>
        </div>

        <div class="row">
            <div class="col text-end text-secondary">Disponible desde:</div>
            <div class="col text-start biz-col-value">{{$seasson->seassonStart}}</div>

        </div>

        <div class="row">
            <div class="col text-end text-secondary">Hasta</div>
            <div class="col text-start biz-col-value">{{$seasson->seassonEnd}} </div>
        </div>




    </div>
</div>
@endsection
