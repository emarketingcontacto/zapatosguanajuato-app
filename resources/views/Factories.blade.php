@php
    //$description = str_replace(" ", "_", "Fabricantes de zapatos en Guanajuato para hacer negocio? Encuentra un amplio catálogo de proveedores en León Guanajuato ¡Emprende tu negocio hoy!");
    $description = "Directorio de Fabricantes de Calzado Guanajuato. Encuentra un amplio catálogo de fabricantes de calzado del estado de Guanajuato. ¡Emprende tu negocio hoy!";

@endphp
<x-layout pageTitle="Directorio de Fabricantes Calzado Guanajuato" pageDescription={{$description}}>

    @section('main-content')

        <div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');" alt="DirectorioFabricantes">
            <h1>Directorio de Fabricantes de Calzado </h1>
        </div>

        {{-- Search Model Categories --}}
        <x-search-model-category bizcategory="Fabricantes"></x-search-model-category>
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
