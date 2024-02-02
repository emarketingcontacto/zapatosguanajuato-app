@extends('layout')

@section('main-content')
<div class="container mb-5 pb-5">
    <div class="row show-banner" style="background-image: url('{{asset('storage/'.$biz->bizImage)}}')">
        <p class="fw-strong fs-2">{{$biz->bizName}} </p>
    </div>
    <hr class="biz-hr">


    {{-- likes --}}
    <div class="row d-flex justify-content-end">
        <div class="col">
            <span class="material-symbols-outlined fs-3 mt-2" style="color:#bd93d8" >verified</span>
            <span class="fs-6" style="color:#bd93d8">Ultima Verificación:</span>
            <span>{{$biz->bizLastvisit}}</span>
        </div>
    <x-likes :bizID="$biz->bizId"></x-likes>
    </div>
    {{-- end likes --}}

    <div class="row biz-row-field">
        <div class="col col-2">
            <span class="material-symbols-outlined">category</span>
            <p>Categoria:</p>
        </div>
        <div class="col">
            <span class="material-symbols-outlined">trolley</span>
            <p>Tipo de Venta:</p>
        </div>
    </div>

    <div class="row biz-row-value">
        <div class="col col-2">{{$bizcat->bizcatName}}</div>
        <div class="col">{{$saletype->saletypeName}}: {{$saletype->saletypeConditions}}</div>
    </div>
    <hr class="biz-hr">

    {{-- second row --}}

    <div class="row biz-row-field">
        <div class="col biz-col-field">
            <span class="material-symbols-outlined">map</span>
            <p>Dirección</p>
        </div>
    </div>

    <div class="row biz-row-value">
            <div class="col col-4 biz-col-value">{{$biz->bizStreetNum}}</div>
            <div class="col biz-col-value">{{$biz->bizNeigborhood}}</div>
            <div class="col biz-col-value">{{$biz->bizState}}</div>
    </div>
    <hr class="biz-hr">
    {{-- row --}}

    <div class="row biz-row-field">
        <div class="col">
            <span class="material-symbols-outlined">support_agent</span>
            <p>Contacto</p>
        </div>
        <div class="col">
            <span class="material-symbols-outlined">send_to_mobile</span>
            <p>Telefono</p>
        </div>
    </div>

    <div class="row biz-row-value">
        <div class="col">{{$biz->bizContact}}</div>
        <div class="col"><a href="tel:{{$biz->bizTel}}">{{$biz->bizTel}}</a></div>
    </div>
    <hr class="biz-hr">
    {{-- row --}}

    <div class="row biz-row-field">
        <div class="col">
            <span class="material-symbols-outlined">contact_mail</span>
            <p>Email</p>
        </div>
        <div class="col">
            <span class="material-symbols-outlined">language</span>
            <p>Website</p>
        </div>
    </div>
    <div class="row biz-row-value">
        <div class="col"><a href="mailto:{{$biz->bizEmail}}">{{$biz->bizEmail}}</a></div>
        <div class="col"><a href="{{$biz->bizWeb}}">{{$biz->bizWeb}}</a></div>
    </div>
    <hr class="biz-hr">
    {{-- row --}}

    <div class="row biz-row-field">
        <div class="col ">
            <span class="bi bi-whatsapp"></span>
           <p>WhatsApp</p>
        </div>
        <div class="col">
            <span class="bi bi-facebook"></span>
            <p>Facebook</p>
        </div>
    </div>

    <div class="row biz-row-value">
        <div class="col ">
            <a href="https://wa.me/{{$biz->bizWhatsApp}}">{{$biz->bizWhatsApp}}</a></div>
        <div class="col">
            <a href="{{$biz->bizFacebook}}">{{$biz->bizFacebook}}</a>
        </div>
    </div>
    <hr class="biz-hr">
    {{-- row --}}

<div class="container m-5 d-flex flex-wrap gap-3 mb-3 pb-3">
    @foreach ($modelos as $modelo)
        <div class="card" style="width: 18rem;">
            <div class="card-head">
                {{-- image --}}
                <a href="{{route('Modelo.show', ['modelo'=>$modelo->modelId])}}">
                    <img src="{{asset('storage/'.$modelo->modelImage)}}" class="card-img-top-modelo" width="100%" height="300">
                </a>
                <div class="card-title-modelo">
                    <p>{{$modelo->modelName}}</p>
                </div>
            </div>

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
