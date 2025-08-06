@php
    $pageTitle = "{$bizcat->bizcatName} de calzado - {$biz->bizName}";
    $pageDescription= "Informacion de {$bizcat->bizcatName} - {$biz->bizName}, encuentra sus mejores modelos y sus datos de contacto para comenzar a hacer negocios";
    $keywords = "Contacto directo {$bizcat->bizcatName} - {$biz->bizName}, Directorio de {$bizcat->bizcatName} de zapatos en Guanajuato";
@endphp
<x-layout pageTitle={{$pageTitle}} pageDescription={{$pageDescription}} keywords={{$keywords}}>
    @section('main-content')
    {{-- banner --}}
    {{-- local --}}
    {{-- <div class="show-banner" style="background-image: url('{{asset('storage/'.$biz->bizImage)}}')"> --}}
    {{-- online --}}
    <div class="row show-banner" style="background-image: url('{{asset('/'.$biz->bizImage)}}')">
    </div>
    {{-- end banner --}}
    <div class="show-banner-title">
        <h1>{{$biz->bizName}}</h1>
        <h2>{{$bizcat->bizcatName}} de calzado</h2>
    </div>
    <div class="biz-info-container">

        <div class="biz-info-col-izq">
            <div class="biz-row-bizdata">

                <div class="row" style="margin: 0">
                    {{-- provedor de modelos  --}}
                        <div class="biz-info-title">
                            <h6>Proveedor de modelos para:</h6>
                        </div>
                        <div style="padding-bottom: 1vh">
                            {{-- row model category --}}
                            <div class="row">
                                @foreach ($modelcategories as $modelcategory)
                                        @switch($modelcategory->modelcatName)
                                            @case("Damas")
                                                <div class="col biz-col-proveedor">
                                                    {{-- <i class="bi bi-gender-female" style="font-size: 2rem"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8M3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5"/>
                                                    </svg>
                                                </div>
                                            @break

                                            @case("Hombres")
                                                <div class="col biz-col-proveedor">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8"/>
                                                    </svg>
                                                </div>
                                            @break

                                            @case("Niñas")
                                                <div class="col biz-col-proveedor">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386"/>
                                                    </svg>
                                                </div>
                                            @break

                                            @case("Niños")
                                                <div class="col biz-col-proveedor">
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
                            <div class="row">
                                @foreach ($modelcategories as $modelcategory)
                                    <div class="col biz-col-proveedor">
                                        {{$modelcategory->modelcatName}}
                                    </div>
                                @endforeach
                            </div>
                            {{-- row end model category --}}
                        </div>
                    {{--end provedor de modelos  --}}
                </div>

                <div class="row" style="margin: 0">
                    <div class="biz-col-svgs">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                            <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                        </svg>
                        <p>Tipo de proveedor</p>
                    </div>
                    <div class="col biz-col-info">
                        <span>
                            {{$bizcat->bizcatName}}
                        </span>
                    </div>
                </div>

                <div class="row" style="margin: 0">
                    <div class="biz-col-svgs">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                          </svg>
                          <p>Condiciones de Venta</p>
                    </div>
                    <div class="col biz-col-info">
                        <span>
                            {{$saletype->saletypeName}}: {{$saletype->saletypeConditions}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="biz-row-bizdata">

                <div class="row" style="margin: 0">
                    <div class="biz-col-svgs">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                        </svg>
                        <p>Dirección</p>
                    </div>
                    <div class="col biz-col-infomap">
                         <x-producer-map latitude="{{$biz->bizLat}}" longitud="{{$biz->bizLon}}" bixName="{{$biz->bizName}}"></x-producer-map>
                         <a id="shareLink" href='https://www.google.com/maps/search/?api=1&query={{$biz->bizLat}},{{$biz->bizLon}}' target="_blank">{{$biz->bizStreetNum}}, {{$biz->bizNeigborhood}}, {{$biz->bizCity}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="biz-col-der">

            <div class="biz-row-bizdata">
                {{-- row verification and likes --}}
                <div class="row" style="margin: 0">
                    {{-- Verification --}}
                    <div class="biz-header">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
                        </svg>
                        <span style="margin-left: 1vw; margin-right:2vw" >Última Verificación:</span>
                        <span>{{$biz->bizLastvisit}}</span>
                    </div>
                    {{--End Verification --}}
                </div>
                <div class="row" style="margin: 0">
                    {{-- likes --}}
                    <div class="">
                        <x-likes :bizID="$biz->bizId"></x-likes>
                    </div>
                    {{-- end likes --}}
                </div>
                {{-- end row verification and likes --}}
            </div>

             <button class="button-contacto" id="contacto-{{$biz->bizName}}">
             Ver Contacto
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
            </svg>
            </button>


             <div class="biz-row-bizdata" id="divContacto">

                <div class="row" style="margin:0">
                     <div class="biz-col-svgs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                        </svg>
                        <p>Contacto</p>
                    </div>
                     <div class="col biz-col-info">
                        <span>
                            {{$biz->bizContact}}
                        </span>
                    </div>
                </div>

                <div class="row" style="margin:0">
                     <div class="biz-col-svgs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                    </svg>
                        <p>Mail</p>
                    </div>
                     <div class="col biz-col-info">
                        <a href="mailto:{{$biz->bizEmail}}">{{$biz->bizEmail}}</a>
                    </div>
                </div>

                <div class="row" style="margin:0">
                     <div class="biz-col-svgs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                            <path d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0M1.807 4.734a.5.5 0 1 0-.884-.468A8 8 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A7 7 0 0 1 1 8c0-1.18.292-2.292.807-3.266m13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A8 8 0 0 0 16 8a8 8 0 0 0-.923-3.734M3.34 6.182a.5.5 0 1 0-.93-.364A6 6 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A5 5 0 0 1 3 8c0-.642.12-1.255.34-1.818m10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818s-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8s-.145-1.505-.41-2.182"/>
                        </svg>
                        <p>Teléfono</p>
                    </div>
                    <div class="col biz-col-info">
                        <a href="tel:+{{$biz->bizTel}}">{{$biz->bizTel}}</a>

                    </div>
                </div>

            </div>

            <div class="biz-row-bizdata" id="divSocials">
                <div class="row biz-socialmedia" style="margin: 0">
                    <h5>Redes Sociales</h5>
                </div>
                <div class="row">
                    <div class="col biz-socialmedia-svg">
                        <a style="width: 100%" href="{{$biz->bizFacebook}}" target="_blank" class="contacto-facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col biz-socialmedia-svg">
                        <a href="{{$biz->bizWeb}}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-browser-chrome" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M16 8a8 8 0 0 1-7.022 7.94l1.902-7.098a3 3 0 0 0 .05-1.492A3 3 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8M0 8a8 8 0 0 0 7.927 8l1.426-5.321a3 3 0 0 1-.723.255 3 3 0 0 1-1.743-.147 3 3 0 0 1-1.043-.7L.633 4.876A8 8 0 0 0 0 8m5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a3 3 0 0 0-1.252.243 2.99 2.99 0 0 0-1.81 2.59M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col biz-socialmedia-svg">
                        <a href="https://wa.me/{{$biz->bizWhatsApp}}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modelos-container">

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

    </div>

    @endsection
</x-layout>
