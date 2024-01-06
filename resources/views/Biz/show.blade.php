@extends('layout')

@section('main-content')
<div class="container">
    <div class="row show-banner" style="background-image: url('{{asset('storage/'.$biz->bizImage)}}')">
        <p class="fw-strong fs-2">{{$biz->bizName}} </p>
    </div>
    <hr class="biz-hr">

    <div class="row m-2">
        <div class="col biz-col-field">Dirección:</div>
        <div class="col biz-col-value">{{$biz->bizStreetNum}}</div>
        <div class="col biz-col-field">Colonia:</div>
        <div class="col biz-col-value">{{$biz->bizNeigborhood}}</div>
        <div class="col biz-col-field">Estado:</div>
        <div class="col biz-col-value">{{$biz->bizState}}</div>
    </div>
    <hr class="biz-hr">

    <div class="row m-2">
        <div class="col biz-col-field">Contacto:</div>
        <div class="col biz-col-value">{{$biz->bizContact}}</div>
        <div class="col biz-col-field">Telefono:</div>
        <div class="col biz-col-value">
        <a href="tel:{{$biz->bizTel}}">{{$biz->bizTel}}</a>
    </div>
    <hr class="biz-hr">
    <div class="row m-2">
        <div class="col biz-col-field">Email:</div>
        <div class="col biz-col-value">
        <a href="mailto:{{$biz->bizEmail}}">{{$biz->bizEmail}}</a></div>
        <div class="col biz-col-field">Website:</div>
        <div class="col biz-col-value">
            <a href="{{$biz->bizWeb}}">{{$biz->bizWeb}}</a>
        </div>
    </div>
    <hr class="biz-hr">

    <div class="row m-2">
        <div class="col biz-col-field">WhatsApp:</div>
        <div class="col biz-col-value">
            <a href="https://wa.me/{{$biz->bizWhatsApp}}">{{$biz->bizWhatsApp}}</a></div>
        <div class="col biz-col-field">Facebook:</div>
        <div class="col biz-col-value">
            <a href="{{$biz->bizFacebook}}">{{$biz->bizFacebook}}</a>
        </div>
    </div>
    <hr class="biz-hr">

    <div class="row m-2">
        <div class="col biz-col-field">Categoria:</div>
        <div class="col biz-col-value">{{$bizcat->bizcatName}}</div>
        <div class="col biz-col-field">Tipo de Venta:</div>
        <div class="col biz-col-value">{{$saletype->saletypeName}}: {{$saletype->saletypeConditions}}</div>
    </div>
    <hr class="biz-hr">
</div>
<div class="container m-5 d-flex flex-wrap gap-3">
    @foreach ($modelos as $modelo)
        <div class="card" style="width: 18rem;">
            {{-- image --}}
            <a href="{{route('Modelo.show', ['modelo'=>$modelo->modelId])}}">
                <img src="{{asset('storage/'.$modelo->modelImage)}}" class="card-img-top-modelo" width="300" height="400">
            </a>
            <h5 class="card-title-modelo text-center">{{$modelo->modelName}}</h5>
            {{-- body --}}
            <div class="card-body-modelo">
                <p class="text-sm-center card-text-modelo">Material</p>
                <p class="card-text text-center text-muted">{{$modelo->materialName}}</p>
                <p class="text-sm-center card-text-modelo">Precio</p>
                <p class="card-text text-center text-muted">${{$modelo->modelPrice}}.00</p>
                <p class="text-sm-center card-text-modelo">Temporada</p>
                <p class="card-text text-center text-muted">{{$modelo->seassonName}}</p>
                </div>
        </div>
    @endforeach
</div>
@endsection
