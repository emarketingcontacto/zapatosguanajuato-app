@php
   $description = str_replace(" ", "_", "Venta_de_zapatos_al_mayoreo_para_tu_negocio_-Encuentra_el_catálogo_completo_de_{$biz->bizName}_y_solicita_una_cotización_hoy_mismo.");
@endphp
<x-layout pageTitle="Catalogo de {{$biz->bizName}}" pageDescription={{$description}}>


    @section('main-content')

    <div class="container mb-5 text-center">
        <div class="row d-flex flex-column justify-center align-content-center">
                <img src="{{asset('storage/'.$modelo->modelImage)}}" height="100%" width="100%">
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
</x-layout>
