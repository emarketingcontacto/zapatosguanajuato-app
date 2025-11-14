<div class="front-factories">
    <div class="front-title-container">
        <h3>Minoristas Destacados</h3>
    </div>
    @foreach ($mostRetailers as $mostRetailer)

    <div class="gallery-front-item">
        {{-- image --}}
        <div class="gallery-front-image">
            <a href="{{route('Fabricantes.showFabricante', ['biz'=>$mostRetailer->bizSlug])}}">
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$mostRetailer->bizImage)}}" alt="{{$mostRetailer->bizImage}}" width="255vh" height="255vh" > --}}
                {{-- online --}}
                <img src="{{asset('/'.$mostRetailer->bizImage)}}" alt="{{$mostRetailer->bizImage}}" width="255vh" height="255vh" >
            </a>
        </div>

        <div class="gallery-front-biz-name">
            <a class="gallery-front-button" href="{{route('Retails.showRetailer', ['biz'=>$mostRetailer->bizSlug])}}">
                {{$mostRetailer->bizName}}
            </a>
        </div>


    </div>

    @endforeach
</div>
