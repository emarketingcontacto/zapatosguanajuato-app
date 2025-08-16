@php
    // $description = str_replace(" ", "_", "Catalogo de Mayoristas de Zapatos en Guanajuato Encuentra los mejores mayoristas y haz crecer tu negocio. ¡Catálogo completo con precios y contactos!");
    $description = "Directorio de Mayoristas de Zapatos en Guanajuato Encuentra los mejores mayoristas y haz crecer tu negocio. ¡Catálogo completo con precios y contactos";
    $keywords ="Mayoristas de calzado en Guanajuato, Productores de zapatos en Guanajuato"
@endphp
<x-layout pageTitle="Mayoristas de calzado en Guanajuato"  pageDescription={{$description}} keywords={{$keywords}}>

@section('main-content')
{{--Header--}}
<div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');">
    <h1>Directorio de Mayoristas de Calzado de Guanajuato</h1>
</div>
{{-- intro text --}}
<div class="intro">
    <h2>
       <strong>Distribuidores de calzado al mayoreo de Guanajuato</strong> ideal para emprendedores y negocios que buscan maximizar su inversión
    </h2>
</div>
<div class="intro-text">
    <h3>
        Haz crecer tu negocio con los mejores Mayoristas de calzado en Guanajuato a precios especiales por mayoreo.
    </h3>
</div>
{{-- end intro text --}}
<hr>


{{-- Banner --}}
<x-banner catName="{{$bizcat->bizcatName}}"></x-banner>
{{-- end Banner --}}

{{-- Search Model Categories --}}
<x-search-model-category bizcategory="Wholesalers"></x-search-model-category>
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

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                            <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.5 2.5 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354z"/>
                            <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708z"/>
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

                <hr style="margin: 0">

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
