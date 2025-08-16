@php
    // $description = str_replace(" ", "_", "¿Buscas dónde comprar zapatos en Guanajuato? Explora nuestro catálogo de tiendas minoristas. ¡Encuentra variedad y las mejores marcas!");
    $description = "Directorio de Minoristas de Zapatos en Guanajuato Encuentra los mejores mayoristas y haz crecer tu negocio. ¡Catálogo completo con precios y contactos";
    $keywords="Minoristas de zapatos de Guanajuato, minoristas de calzado en Guanajuato";
@endphp
<x-layout pageTitle="Tiendas de Zapatos"  pageDescription={{$description}} keywords={{$keywords}}>

@section('main-content')

<div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');">
    <h1>Directorio de Minoristas de Calzado en Guanajuato </h1>
</div>
 {{-- intro text --}}
 <div class="intro">
    <h2>
        Los mejores <strong> distribuidores de calzado del estado de Guanajuato</strong>, ofreciendo una amplia gama de estilos y modelos que se adaptan a las tendencias actuales del mercado.
    </h2>
</div>
<hr>
{{-- Banner --}}
 <x-banner catName="{{$bizcat->bizcatName}}"></x-banner>
{{-- end Banner --}}

{{--
<div class="intro-text">
</div>
--}}
{{-- end intro text --}}
{{-- Search Model Categories --}}
<x-search-model-category bizcategory="Retails"></x-search-model-category>
{{-- End Search Model Categories --}}

   {{-- Biz Items --}}
    <div class="biz-item-container">
        @foreach ($business as $biz)
            <div class="card" style="width: 18rem; background-color:#F5F5F5">
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px"> --}}
                {{-- online --}}
                <img src="{{asset('/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px">
                <h4 class="card-title">{{$biz->bizName}}</h4>
                <div class="card-body card-text">
                    {{--BizCatName--}}
                    <div class="row biz-row-catname">
                        <div class="col col-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
                            </svg>
                        </div>
                        <div class="col">
                           <p>{{$biz->bizcatName}}</p>
                        </div>
                    </div>
                    {{--end BizCatName--}}

                    {{-- modelCategoriesList--}}
                        <x-ModelCategoriesList :bizID="$biz->bizId"></x-ModelCategoriesList>
                    {{-- end modelCategoriesList--}}

                    <hr style="margin:0">
                    <div class="btn-show">
                        <a href="{{route('Biz.show', ['biz'=>$biz->bizSlug])}}" class="btn btn-sm  btn-show form-control">
                            Ver Detalles...
                        </a>
                    </div>
                </div>

            </div>

        @endforeach
    </div>
    {{-- end Biz Items --}}


@endsection
</x-layout>
