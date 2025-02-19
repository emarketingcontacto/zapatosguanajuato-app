<div class="front-factories">
    <div class="front-title">
        <div class="front-title-most">
            <h5>Minoristas Destacados</h5>
        </div>
    </div>
    @foreach ($mostRetailers as $mostRetailer)

    <div class="gallery-item">
        {{-- image --}}
        <div class="gallery-image">
            <a href="{{route('Biz.show', ['biz'=>$mostRetailer->bizId])}}">
                {{-- <img src="{{asset('storage/'.$mostRetailer->bizImage)}}" alt="{{$mostRetailer->bizImage}}" width="155vh" height="155vh" > --}}
                <img src="{{asset('/'.$mostRetailer->bizImage)}}" alt="{{$mostRetailer->bizImage}}" width="155vh" height="155vh" >
            </a>
        </div>

        <div class="gallery-biz-name">
            <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$mostRetailer->bizId])}}">
                <h3>{{$mostRetailer->bizName}}</h3>
            </a>
        </div>


    </div>

    @endforeach
</div>
