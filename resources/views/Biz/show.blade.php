<x-layout pageTitle="{{$bizcat->bizcatName}} de calzado -{{$biz->bizName}}" pageDescription="Informacion de {{$bizcat->bizcatName}} - {{$biz->bizName}}, encuentra sus mejores modelos y sus datos de contacto para comenzar a hacer negocios">
    @section('main-content')
        <div class="container mb-5 pb-5">
            {{-- row image --}}
                {{-- local --}}
                {{-- <div class="row show-banner" style="background-image: url('{{asset('storage/'.$biz->bizImage)}}')"> --}}
                {{-- online --}}
                <div class="row show-banner" style="background-image: url('{{asset('/'.$biz->bizImage)}}')">
                    <h1 class="fw-strong fs-2">{{$biz->bizName}}</h1>
            </div>
            {{-- row image --}}

            <hr class="biz-hr">

            {{-- row verification and likes --}}
            <div class="row d-flex">
                {{-- Verification --}}
                <div class="col-11 biz-header">
                    <span class="material-symbols-outlined fs-1 mt-2" >verified</span>
                    <span class="fs-6 p-1" >Última Verificación:</span>
                    <span>{{$biz->bizLastvisit}}</span>
                </div>
                {{--End Verification --}}
                {{-- likes --}}
                <div class="col-1 col-likes">
                    <x-likes :bizID="$biz->bizId"></x-likes>
                </div>
                {{-- end likes --}}
            </div>
            {{-- end row verification and likes --}}

            {{-- row model category --}}
            <div class="row biz-row-field">
                    @foreach ($modelcategories as $modelcategory)
                            @switch($modelcategory->modelcatName)
                                @case("Damas")
                                    <div class="col"><i class="bi bi-gender-female" style="font-size: 2rem"></i></div>
                                @break

                                @case("Hombres")
                                    <div class="col"><i class="bi bi-gender-male" style="font-size: 2rem"></i></div>
                                @break

                                @case("Niñas")
                                    <div class="col"><i class="bi bi-balloon-heart-fill" style="font-size: 2rem"></i></div>
                                @break

                                @case("Niños")
                                    <div class="col"><i class="bi bi-balloon-fill" style="font-size: 2rem"></i></div>
                                @break

                                @default

                            @endswitch

                    @endforeach
            </div>
            <div class="row biz-row-value">
                @foreach ($modelcategories as $modelcategory)
                    <div class="col">
                        {{$modelcategory->modelcatName}}
                    </div>
                @endforeach
            </div>
            {{-- row end model category --}}

             {{-- row biz type & conditions --}}
             <div class="row biz-row-field">
                <div class="col">
                    <span class="material-symbols-outlined">category</span>
                    <p>Categoria</p>
                </div>
                <div class="col">
                    <span class="material-symbols-outlined">trolley</span>
                    <p>Venta</p>
                </div>
             </div>
             <div class="row biz-row-value">
                <div class="col">{{$bizcat->bizcatName}}</div>
                <div class="col">{{$saletype->saletypeName}}: {{$saletype->saletypeConditions}}</div>
            </div>
            {{-- end row biz type & conditions --}}

            {{-- row Networks --}}
            <div class="row biz-row-field">
                <div class="col biz-col-field-link">
                    <a style="width: 100%" href="{{$biz->bizFacebook}}" target="_blank">
                        <span class="bi bi-facebook"></span>
                    </a>
                </div>
                <div class="col biz-col-field-link">
                    <a href="{{$biz->bizWeb}}" target="_blank">
                        <span class="material-symbols-outlined">language</span>
                    </a>

                </div>
                <div class="col biz-col-field-link">
                    <a href="mailto:{{$biz->bizEmail}}">
                        <span class="material-symbols-outlined">contact_mail</span>
                    </a>
                </div>
            </div>
            <div class="row biz-row-value">

                <div class="col">Facebook</div>
                 <div class="col">Website</div>
                 <div class="col">Email</div>
            </div>
            {{-- end row Networks--}}

            {{-- row Contacto & phone --}}
            <div class="row biz-row-field">
                <div class="col">
                    <span class="material-symbols-outlined">support_agent</span>
                    <p>Contacto</p>
                </div>
                <div class="col">
                    <span class="material-symbols-outlined">send_to_mobile</span>
                    <p>Telefono</p>
                </div>

                <div class="col ">
                    <span class="bi bi-whatsapp"></span>
                    <p>WhatsApp</p>
                </div>


            </div>
            <div class="row biz-row-value">
                <div class="col">{{$biz->bizContact}}</div>
                <div class="col"><a href="tel:{{$biz->bizTel}}">{{$biz->bizTel}}</a></div>
                <div class="col ">
                    <a href="https://wa.me/{{$biz->bizWhatsApp}}" target="_blank">{{$biz->bizWhatsApp}}</a>
                </div>
            </div>
            {{-- end row Contacto & phone --}}

             {{-- row address--}}
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
            {{-- end row address --}}

            <hr class="biz-hr">

            {{--See models open/close--}}
            {{-- <div class="w-100 d-flex justify-content-start seemodelos">
                <i id="iopen" class="bi bi-chevron-double-down fs-6" onclick=openModelos() style="display:none"></i>
                <i id="iclose" class="bi bi-chevron-double-up fs-6" onclick=closeModelos()></i>
                <span id="textmodelos">Ocultar Modelos</span>
            </div> --}}
            {{--end See models open/close--}}

            {{--subcategorySearch--}}
            <x-subcategorysearch :bizID="$biz->bizId"></x-subcategorysearch>
            {{--subcategorySearch--}}
            <hr class="biz-hr">
            {{-- <div class="container m-5 d-flex flex-wrap gap-3 mb-3 pb-3"  id="divmodelos"> --}}
                <div class="container-modelos" id="divmodelos">
                    @foreach ($modelos as $modelo)
                        <div class="card" style="width: 18rem;">
                            <div class="card-head">
                                {{-- image --}}
                                <a href="{{route('Modelo.show', ['modelo'=>$modelo->modelId])}}">
                                    {{-- local --}}
                                    {{-- <img src="{{asset('storage/'.$modelo->modelImage)}}" class="card-img-top-modelo" width="100%" height="300"> --}}
                                    {{-- online --}}
                                    <img src="{{asset('/'.$modelo->modelImage)}}" class="card-img-top-modelo" width="100%" height="300">
                                    {{-- <div class="card-title-modelo">
                                        <p>{{$modelo->modelName}}</p>
                                    </div> --}}
                                </a>

                            </div>

                            {{-- body --}}
                            <div class="card-body-modelo">
                                <div class="row">
                                    <div class="col-5">
                                        <p class="text-sm-center card-text-modelo">Modelo</p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text-modelo-muted">{{$modelo->modelName}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <p class="text-sm-center card-text-modelo">Temporada</p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text-modelo-muted">{{$modelo->seassonName}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <p class="text-sm-center card-text-modelo">Tipo</p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text-modelo-muted">{{$modelo->modelsubcatName}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <p class="text-sm-center card-text-modelo">Material</p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text-modelo-muted">{{$modelo->materialName}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <p class="text-sm-center card-text-modelo">Precio</p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text-modelo-muted">${{$modelo->modelPrice}}.00</p>
                                    </div>
                                </div>
                                <div class="row row-btn-model">
                                    <a href="{{route('Modelo.show', ['modelo'=>$modelo->modelId])}}" class="button-card-model">
                                        Ver Detalles...
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>

    @endsection

</x-layout>
