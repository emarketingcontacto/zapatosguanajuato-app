@php
    // $description = str_replace(" ", "_", "Catalogo de Mayoristas de Zapatos en Guanajuato Encuentra los mejores mayoristas y haz crecer tu negocio. ¡Catálogo completo con precios y contactos!");
    $description = "Directorio de Mayoristas de Zapatos en Guanajuato Encuentra los mejores mayoristas y haz crecer tu negocio. ¡Catálogo completo con precios y contactos";
@endphp
<x-layout pageTitle="Catalogo Mayoristas"  pageDescription={{$description}}>

@section('main-content')
{{--Header--}}
<div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');">
    <h1>Directorio de Mayoristas de Calzado</h1>
</div>
{{-- intro text --}}
<div class="intro">
    <h2>
       <strong>Distribuidores de calzado al mayoreo </strong> ideal para emprendedores y negocios que buscan maximizar su inversión
       con productos que destacan por su diseño y durabilidad.
    </h2>
</div>
<div class="intro-text">
    <h3>
        Ya sea que busques botas, zapatillas, sandalias o calzado casual, contamos con lo que necesitas para satisfacer las necesidades de tus clientes.
    </h3>
</div>
{{-- end intro text --}}
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
                {{-- likes --}}
                    <div class="row likes">
                        <div class="col verified">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
                              </svg>
                            <span>verified</span>
                            <span style="color:#bd93d8; font-size:.7rem">{{$biz->bizLastvisit}}</span>
                        </div>
                        <x-likes :bizID="$biz->bizId"></x-likes>
                    </div>
                {{-- end likes --}}

                {{-- modelCategoriesList--}}
                    <x-ModelCategoriesList :bizID="$biz->bizId"></x-ModelCategoriesList>
                {{-- end modelCategoriesList--}}
                <div class="row">
                    <div class="col col-3 provider-items">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                        </svg>
                    </div>
                    <div class="col">
                        <span>{{$biz->saletypeName}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-3 provider-items">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                        </svg>
                    </div>
                    <div class="col">
                        <span class="card-email-sm">
                            <a class="card-link" href="mailto:{{$biz->bizEmail}}">{{$biz->bizEmail}}</a>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-3 provider-items">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                            <path d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0M1.807 4.734a.5.5 0 1 0-.884-.468A8 8 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A7 7 0 0 1 1 8c0-1.18.292-2.292.807-3.266m13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A8 8 0 0 0 16 8a8 8 0 0 0-.923-3.734M3.34 6.182a.5.5 0 1 0-.93-.364A6 6 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A5 5 0 0 1 3 8c0-.642.12-1.255.34-1.818m10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818s-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8s-.145-1.505-.41-2.182"/>
                        </svg>
                    </div>
                    <div class="col">
                        <span>
                            <a class="card-link" href="tel:{{$biz->bizTel}}">{{$biz->bizTel}}</a>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-3 provider-items">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
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
