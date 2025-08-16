@php
    $description ="Directorio de Zapatos para Niñas hecho en Guanajuato. Encuentra contactos de fabricantes y mayoristas de calzado para niñas de Guanajuato. ¡Emprende tu negocio hoy!";
    $keywords = "Venta de zapatos para Niñas en Guanajuato, Directorio de zapatos para Niñas, Venta de zapatos para Niñas a precio de mayoreo";
@endphp
<x-layout pageTitle="Directorio de Zapatos para Niñas de Guanajuato" pageDescription={{$description}} keywords={{$keywords}}>

    @section('main-content')

    <div class="header-Category" style="background-image: url('{{asset('storage/'.$modelcat->modelcatImage)}}')" alt="DirectorioGirls">
        <h1>Directorio de Calzado de Guanajuato para Niñas</h1>
    </div>
 {{-- intro text --}}
 <div class="intro">
    <h2>
        <strong>Proveedores de calzado para Niñas </strong> calidad y precios de fábrica para distribuidores de Guanajuato
    </h2>
</div>
<div class="intro-text">
    <h3>
        Encuentra los mejores proveedores de calzado de Guanajuato para Niñas a los mejores precios.
    </h3>
</div>
{{-- end intro text --}}

{{-- submenu-categories --}}
<div class="submenu-subcategories-div">
    <div class="submenu-subcategories">
        <div class="submenu-subcat">
            <a href="#fabricantes">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                    <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                </svg>
                <p>Fabricantes</p>
            </a>
        </div>
        <div class="submenu-subcat">
            <a href="#mayoristas">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                    <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.5 2.5 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354z"/>
                    <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708z"/>
                </svg>
                <p>Mayoristas</p>
            </a>
        </div>
        <div class="submenu-subcat">
            <a href="#minoristas">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                    <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                  </svg>
                <p>Minoristas</p>
            </a>

        </div>
    </div>
</div>
{{-- end submenu-categories --}}


  {{-- Factories --}}
  <div class="factories-modelsubcat">
    <div class="genders-category-container">
        <div class="genders-category-title" id="fabricantes">
            <h4>Fabricantes de calzado para Niñas</h4>
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
                    <img src="{{asset('/'.$factory->modelImage)}}" alt="{{$factory->bizName}}" width="255vw" height="255vh">
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
                <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$factory->bizSlug])}}">{{$factory->bizName}}</a>
                </a>
            </div>
        </div>
    @endforeach
</div>
{{-- End Factories --}}

{{-- Wholesalers --}}
<div class="factories-modelsubcat">
    <div class="genders-category-container">
        <div class="genders-category-title" id="mayoristas">
            <h4>Mayoristas de calzado para Niñas</h4>
        </div>
    </div>
    @foreach ($wholesalers as $wholesaler)
        <div class="factories-item">
            <div class="gallery-model-name">
                {{$wholesaler->modelName}}
            </div>
            <div class="gallery-image">
                <a href="{{route('Modelo.show', ['modelo'=>$wholesaler->modelId])}}">
                    {{-- local --}}
                    {{-- <img src="{{asset('storage/'.$wholesaler->modelImage)}}" alt="Minorista Uno" width="255vw" height="255vh"> --}}
                    {{-- online --}}
                    <img src="{{asset('/'.$wholesaler->modelImage)}}" alt="{{$wholesaler->bizName}}" width="255vw" height="255vh">
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
                <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$wholesaler->bizSlug])}}">{{$wholesaler->bizName}}</a>
                </a>
            </div>
        </div>
    @endforeach
</div>
{{-- End Factories --}}

 {{-- Retails --}}
 <div class="factories-modelsubcat">
    <div class="genders-category-container">
        <div class="genders-category-title" id="minoristas">
            <h4>Minoristas de calzado para Niñas</h4>
        </div>
    </div>
    @foreach ($retails as $retail)
        <div class="factories-item">
            <div class="gallery-model-name">
                {{$retail->modelName}}
            </div>
            <div class="gallery-image">
                <a href="{{route('Modelo.show', ['modelo'=>$retail->modelId])}}">
                    {{-- local --}}
                    {{-- <img src="{{asset('storage/'.$retail->modelImage)}}" alt="Minorista Uno" width="255vw" height="255vh"> --}}
                    {{-- online --}}
                    <img src="{{asset('/'.$retail->modelImage)}}" alt="{{$retail->bizName}}" width="255vw" height="255vh">
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
                <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$retail->bizSlug])}}">{{$retail->bizName}}</a>
                </a>
            </div>
        </div>
    @endforeach
</div>
{{-- End Retails --}}

@endsection

</x-layout>

