@php
    // $description = str_replace(" ", "_", "¿Buscas dónde comprar zapatos en Guanajuato? Explora nuestro catálogo de tiendas minoristas. ¡Encuentra variedad y las mejores marcas!");
    $description = "Directorio de Minoristas de Zapatos en Guanajuato Encuentra los mejores mayoristas y haz crecer tu negocio. ¡Catálogo completo con precios y contactos";

@endphp
<x-layout pageTitle="Tiendas de Zapatos"  pageDescription={{$description}}>

@section('main-content')

<div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');">
    <h1>Directorio de Minoristas de Calzado </h1>
</div>

{{-- Search Model Categories --}}
<x-search-model-category bizcategory="Retails"></x-search-model-category>
{{-- End Search Model Categories --}}

   {{-- Biz Items --}}
    <div class="container m-4 d-flex gap-3 pb-5 flex-wrap justify-content-center" style="max-width: 100vw">
        @foreach ($business as $biz)

            <div class="card" style="width: 18rem; background-color:#F5F5F5">
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px"> --}}
                {{-- online --}}
                <img src="{{asset('/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px">
                <h2 class="card-title">{{$biz->bizName}}</h2>
                <div class="card-body card-text">
                    {{-- likes --}}
                        <div class="row d-flex justify-content-end">
                            <div class="col d-flex align-items-center gap-1">
                                <span class="material-symbols-outlined fs-3 mt-2" style="color:#bd93d8" >verified</span>
                                <span style="color:#bd93d8; font-size:.7rem">{{$biz->bizLastvisit}}</span>
                            </div>
                            <x-likes :bizID="$biz->bizId"></x-likes>
                        </div>
                    {{-- end likes --}}

                    {{-- modelCategoriesList--}}
                        <x-ModelCategoriesList :bizID="$biz->bizId"></x-ModelCategoriesList>
                    {{-- end modelCategoriesList--}}
                    <div class="row">
                        <div class="col col-3">
                            <span class="material-symbols-outlined">trolley</span>
                        </div>
                        <div class="col">
                            <span>{{$biz->saletypeName}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-3">
                            <span class="material-symbols-outlined">contact_mail</span>
                        </div>
                        <div class="col">
                            <span class="card-email-sm">
                                <a class="card-link" href="mailto:{{$biz->bizEmail}}">{{$biz->bizEmail}}</a>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-3">
                            <span class="material-symbols-outlined">send_to_mobile</span>
                        </div>
                        <div class="col">
                            <span>
                                <a class="card-link" href="tel:{{$biz->bizTel}}">{{$biz->bizTel}}</a>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-3">
                            <span class="bi bi-whatsapp"></span>
                        </div>
                        <div class="col">
                            <span>
                                <a class="card-link" href="https://wa.me/{{$biz->bizWhatsApp}}" target="_blank">{{$biz->bizWhatsApp}}</a>
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="btn-show">
                        <a href="{{route('Biz.show', ['biz'=>$biz->bizId])}}" class="btn btn-sm  btn-show form-control">
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
