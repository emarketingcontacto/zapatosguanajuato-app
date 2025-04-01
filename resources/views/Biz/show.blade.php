<x-layout pageTitle="{{$bizcat->bizcatName}} de calzado -{{$biz->bizName}}" pageDescription="Informacion de {{$bizcat->bizcatName}} - {{$biz->bizName}}, encuentra sus mejores modelos y sus datos de contacto para comenzar a hacer negocios">
    @section('main-content')
        <div class="container mb-5 pb-5">
            {{-- row image --}}
                {{-- local --}}
                <div class="show-banner" style="background-image: url('{{asset('storage/'.$biz->bizImage)}}')">
                {{-- online --}}
                {{-- <div class="row show-banner" style="background-image: url('{{asset('/'.$biz->bizImage)}}')"> --}}
                    <div class="show-banner-title">
                        <h1>{{$biz->bizName}}</h1>
                        <h2>{{$bizcat->bizcatName}} de calzado</h2>
                    </div>
                </div>
            {{-- row image --}}
            <hr class="biz-hr">
            {{-- row verification and likes --}}
            <div class="row d-flex">
                {{-- Verification --}}
                <div class="col-11 biz-header">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
                    </svg>
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
                                    <div class="col">
                                        {{-- <i class="bi bi-gender-female" style="font-size: 2rem"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8M3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5"/>
                                          </svg>
                                    </div>
                                @break

                                @case("Hombres")
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8"/>
                                          </svg>
                                    </div>
                                @break

                                @case("Niñas")
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386"/>
                                          </svg>
                                    </div>
                                @break

                                @case("Niños")
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket-takeoff-fill" viewBox="0 0 16 16">
                                            <path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.6 3.6 0 0 0-.108-.563 2 2 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2 2 0 0 0-.16-.045 4 4 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.55 2.55 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361s.437 1.732-.36 2.531Z"/>
                                            <path d="M5.205 10.787a7.6 7.6 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925"/>
                                          </svg>
                                    </div>
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                        <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                    </svg>
                    <p>Categoria</p>
                </div>
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                      </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                    </a>
                </div>
                <div class="col biz-col-field-link">
                    <a href="{{$biz->bizWeb}}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-browser-chrome" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M16 8a8 8 0 0 1-7.022 7.94l1.902-7.098a3 3 0 0 0 .05-1.492A3 3 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8M0 8a8 8 0 0 0 7.927 8l1.426-5.321a3 3 0 0 1-.723.255 3 3 0 0 1-1.743-.147 3 3 0 0 1-1.043-.7L.633 4.876A8 8 0 0 0 0 8m5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a3 3 0 0 0-1.252.243 2.99 2.99 0 0 0-1.81 2.59M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        </svg>
                    </a>

                </div>
                <div class="col biz-col-field-link">
                    <a href="mailto:{{$biz->bizEmail}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 4.697v4.974A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-1.965.45l-.338-.207z"/>
                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/>
                          </svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                    </svg>
                    <p>Contacto</p>
                </div>
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                        <path d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0M1.807 4.734a.5.5 0 1 0-.884-.468A8 8 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A7 7 0 0 1 1 8c0-1.18.292-2.292.807-3.266m13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A8 8 0 0 0 16 8a8 8 0 0 0-.923-3.734M3.34 6.182a.5.5 0 1 0-.93-.364A6 6 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A5 5 0 0 1 3 8c0-.642.12-1.255.34-1.818m10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818s-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8s-.145-1.505-.41-2.182"/>
                    </svg>
                    <p>Telefono</p>
                </div>

                <div class="col ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                    </svg>
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
