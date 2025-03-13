<div class="front-factories">
    <div class="front-title">
        <div class="front-title-most">
            <h5>Minoristas Destacados</h5>
        </div>
    </div>
    @foreach ($mostRetailers as $mostRetailer)

    <div class="gallery-front-item">
        {{-- image --}}
        <div class="gallery-front-image">
            <a href="{{route('Biz.show', ['biz'=>$mostRetailer->bizId])}}">
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$mostRetailer->bizImage)}}" alt="{{$mostRetailer->bizImage}}" width="255vh" height="255vh" > --}}
                {{-- online --}}
                <img src="{{asset('/'.$mostRetailer->bizImage)}}" alt="{{$mostRetailer->bizImage}}" width="255vh" height="255vh" >
            </a>
        </div>

        <div class="gallery-front-biz-name">
            <a class="gallery-front-button" href="{{route('Biz.show', ['biz'=>$mostRetailer->bizId])}}">
                <h3>{{$mostRetailer->bizName}}</h3>
            </a>
        </div>


    </div>

    @endforeach
</div>
