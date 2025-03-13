@php
    $description = "Venta de Calzado para Dama - Zapatos Guanajuato. Directorio  de fabricantes, mayoristas y menudistas para la venta de calzado para Dama en Guanajuato. ¡Emprende tu negocio hoy!";
@endphp
<x-layout pageTitle="Venta de Calzado para Dama - Zapatos Guanajuato" pageDescription={{$description}}>

    @section('main-content')

    <div class="header-Category" style="background-image: url('{{asset('storage/'.$modelcat->modelcatImage)}}')" alt="DirectorioDamas">
        <h1>Venta de Calzado para Dama</h1>
    </div>

    {{-- Factories --}}
    <div class="factories-modelsubcat">
        <div class="genders-category-container">
            <div class="genders-category-title">
                <h3>Fabricantes de calzado para Dama</h3>
            </div>
        </div>
        @foreach ($factories as $factory)
            <div class="factories-item">
                <div class="gallery-model-name">
                    {{$factory->modelName}}
                </div>
                <div class="gallery-image">
                    <a href="{{route('Modelo.show', ['modelo'=>$factory->modelId])}}">
                        {{-- local --}}
                        {{-- <img src="{{asset('storage/'.$factory->modelImage)}}" alt="Minorista Uno" width="255vw" height="255vh"> --}}
                        {{-- online --}}
                        <img src="{{asset('/'.$factory->modelImage)}}" alt="Minorista Uno" width="255vw" height="255vh">
                    </a>
                </div>
                <div class="card-text gallery-biz-name">
                    <div class="row modelo-row">
                        <div class="col field">Precio</div>
                        <div class="col value">
                            <span style="currency, currency:'MXN'">${{ number_format($factory->modelPrice, 2, '.', ',') }}</span>
                        </div>

                    </div>
                </div>
                <div class="gallery-biz-name">
                    <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$factory->bizId])}}">{{$factory->bizName}}</a>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    {{-- End Factories --}}

    {{-- Wholesalers --}}
    <div class="factories-modelsubcat">
        <div class="genders-category-container">
            <div class="genders-category-title">
                <h3>Mayoristas de calzado para Dama</h3>
            </div>
        </div>
        @foreach ($wholesalers as $wholesaler)
            <div class="factories-item">
                <div class="gallery-model-name">
                    {{$wholesaler->modelName}}
                </div>
                <div class="gallery-image">
                    <a href="{{route('Modelo.show', ['modelo'=>$wholesaler->modelId])}}">
                        {{-- online --}}
                        {{-- <img src="{{asset('storage/'.$wholesaler->modelImage)}}" alt="Minorista Uno" width="255vw" height="255vh"> --}}
                        {{-- local --}}
                        <img src="{{asset('/'.$wholesaler->modelImage)}}" alt="Minorista Uno" width="255vw" height="255vh">
                    </a>
                </div>
                <div class="card-text gallery-biz-name">
                    <div class="row modelo-row">
                        <div class="col field">Precio</div>
                        <div class="col value">
                            <span style="currency, currency:'MXN'">${{ number_format($wholesaler->modelPrice, 2, '.', ',') }}</span>
                        </div>
                    </div>
                </div>
                <div class="gallery-biz-name">
                    <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$wholesaler->bizId])}}">{{$wholesaler->bizName}}</a>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    {{-- End Factories --}}

     {{-- Retails --}}
     <div class="factories-modelsubcat">
        <div class="genders-category-container">
            <div class="genders-category-title">
                <h3>Minoristas de calzado para Dama</h3>
            </div>
        </div>
        @foreach ($retails as $retail)
            <div class="factories-item">
                <div class="gallery-model-name">
                    {{$retail->modelName}}
                </div>
                <div class="gallery-image">
                    <a href="{{route('Modelo.show', ['modelo'=>$retail->modelId])}}">
                        {{-- online --}}
                        <img src="{{asset('storage/'.$retail->modelImage)}}" alt="Minorista Uno" width="255vw" height="255vh">
                        {{-- local --}}
                        {{-- <img src="{{asset('/'.$retail->modelImage)}}" alt="Minorista Uno" width="255vw" height="255vh"> --}}
                    </a>
                </div>
                <div class="card-text gallery-biz-name">
                    <div class="row modelo-row">
                        <div class="col field">Precio</div>
                        <div class="col value">
                            <span style="currency, currency:'MXN'">${{ number_format($retail->modelPrice, 2, '.', ',') }}</span>
                        </div>
                    </div>
                </div>
                <div class="gallery-biz-name">
                    <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$retail->bizId])}}">{{$retail->bizName}}</a>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    {{-- End Retails --}}


    @endsection

</x-layout>
