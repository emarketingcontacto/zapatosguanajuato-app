<div class="front-factories bg-light">
    <div class="front-title">
        <div class="front-title-most">
            <h5>Mayoristas Destacados</h5>
        </div>
    </div>
    @foreach ($mostWholesalers as $mostWholesale)

    <div class="gallery-item">
        {{-- image --}}
        <div class="gallery-image">
            <a href="{{route('Biz.show', ['biz'=>$mostWholesale->bizId])}}">
                {{-- <img src="{{asset('storage/'.$mostWholesale->bizImage)}}" alt="{{$mostWholesale->bizImage}}" width="155vh" height="155vh" > --}}
                <img src="{{asset('/'.$mostWholesale->bizImage)}}" alt="{{$mostWholesale->bizImage}}" width="155vh" height="155vh" >
            </a>
        </div>
        <div class="gallery-biz-name">
            <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$mostWholesale->bizId])}}">
                {{$mostWholesale->bizName}}
            </a>
        </div>
    </div>

    @endforeach
</div>
