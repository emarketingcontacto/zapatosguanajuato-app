@php
   $description = "Modelo {$modelo->modelName} para {$modelcategory->modelcatName} de {$biz->bizName} solicita una cotización hoy mismo.";
   $keywords = "Directorio de calzado{$biz->bizName}, Modelos de {$biz->bizName}";
@endphp
<x-layout pageTitle="Modelo {{$modelo->modelName}} de {{$biz->bizName}}" pageDescription={{$description}} keywords={{$keywords}}>


    @section('main-content')

    <div class="container text-center">
        <div class="row model-container">
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$modelo->modelImage)}}" height="100%" width="100%"> --}}
                {{-- online --}}
                <img src="{{asset('/'.$modelo->modelImage)}}" height="100%" width="100%">
                <h1 class="hero-text-modelo">{{$modelo->modelName}}</h1>
        </div>
    </div>
        <div class="modelo-info-main">

            <div class="modelo-info">

                <div class="row">
                    <div class="col text-end model-field">Distribuidor:</div>
                    <div class="col text-start model-value">
                        <a href="{{route('Biz.show', ['biz'=>$biz->bizId])}}">
                            {{$biz->bizName}}
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Precio:</div>
                    <div class="col text-start model-value" style="currency, currency:'MXN'">${{number_format($modelo->modelPrice,2,'.',',')}}</div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Material:</div>
                    <div class="col text-start model-value">{{$material->materialName}}</div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Temporada:</div>
                    <div class="col text-start model-value">{{$seasson->seassonName}}</div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Disponible desde:</div>
                    <div class="col text-start model-value">{{$seasson->seassonStart}}</div>
                </div>

                <div class="row">
                    <div class="col text-end model-field">Hasta:</div>
                    <div class="col model-value">{{$seasson->seassonEnd}} </div>
                </div>
                <div class="row">
                    <div class="col text-end model-field">Categoria</div>
                    <div class="col model-value">{{$modelcategory->modelcatName}}</div>
                </div>
            </div>
        </div>
    @endsection
</x-layout>
