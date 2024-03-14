@extends('layout')

@section('main-content')

<div class="header-Category" style="background-image: url('{{asset('storage/'.$bizcat->bizcatImage)}}');">
    <p>Fabricantes</p>
</div>

{{-- Search --}}
<div class="d-flex w-100 justify-content-center ">
    <div class="modelcategories">
        @foreach ($modelcategories as $modelcategory)
            @switch($modelcategory->modelcatName)
                @case("Damas")
                    <form name="damas" action="{{route('Factories')}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="damas"  style="cursor:pointer" onclick="document.forms['damas'].submit()">
                            <input type="hidden" name="modelcat" value="Damas">
                            <i class="bi bi-gender-female"></i>
                            <p>Damas</p>
                        </div>
                    </form>
                @break

                @case("Hombres")
                    <form name="hombre" action="{{route('Factories')}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="Hombres" style="cursor:pointer" onclick="document.forms['hombre'].submit()" >
                            <input type="hidden" name="modelcat" value="Hombres">
                            <i class="bi bi-gender-male"></i>
                            <p>Hombres</p>
                        </div>
                    </form>
                @break

                @case("Niñas")
                    <form name="ninas" action="{{route('Factories')}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="Ninas" style="cursor:pointer" onclick="document.forms['ninas'].submit()">
                            <input type="hidden" name="modelcat" value="Niñas">
                            <i class="bi bi-balloon-heart-fill"></i>
                            <P>Niñas</P>
                        </div>
                    </form>
                @break

                @case("Niños")
                    <form name="ninos" action="{{route('Factories')}}" method="get">
                        @csrf
                        @method('GET')
                        <div class="Ninos" style="cursor:pointer" onclick="document.forms['ninos'].submit()">
                            <input type="hidden" name="modelcat" value="Niños">
                            <i class="bi bi-balloon-fill"></i>
                            <p>Niños</p>
                        </div>
                    </form>
                @break
                @default
            @endswitch
        @endforeach
    </div>
</div>
{{-- end Search --}}

{{-- Biz Items --}}
<div class="container m-4 d-flex gap-3 pb-5 flex-wrap justify-content-center" style="max-width: 100vw">
    @foreach ($business as $biz)
        <div class="card" style="width: 18rem; background-color:#F5F5F5">
            {{-- <img src="{{asset('storage/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px"> --}}
            <img src="{{asset('/'.$biz->bizImage)}}" class="card-img-top" style="height: 380px">
            <h5 class="card-title">{{$biz->bizName}}</h5>
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
                        <span class="material-symbols-outlined">support_agent</span>
                    </div>
                    <div class="col">
                        <span>{{$biz->bizContact}}</span>
                    </div>
                </div>


                <div class="row">
                    <div class="col col-3">
                        <span class="material-symbols-outlined">send_to_mobile</span>
                    </div>
                    <div class="col">
                        <span>{{$biz->bizTel}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-3">
                        <span class="material-symbols-outlined">map</span>
                    </div>
                    <div class="col">
                        <span>{{$biz->bizCity}}</span>
                    </div>
                </div>


                <hr>
                <div class="btn-show">
                    <a href="{{route('Biz.show', ['biz'=>$biz->bizId])}}" class="btn btn-sm btn-show form-control">
                        <span class="material-symbols-outlined">info</span>
                        <span class="pb-1" style="color:var(--font-strong)">Detalles...</span>
                    </a>
                </div>
            </div>
        </div>

    @endforeach
</div>
{{-- end Biz Items --}}

@endsection
