<div class="front-factories bg-light">
    <div class="front-title">
        <div class="front-title-most">
            <h3>Mayoristas Destacados</h3>
        </div>
    </div>
    @foreach ($mostWholesalers as $mostWholesale)

    <div class="gallery-front-item">
        {{-- image --}}
        <div class="gallery-front-image">
            <a href="{{route('Biz.show', ['biz'=>$mostWholesale->bizId])}}">
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$mostWholesale->bizImage)}}" alt="{{$mostWholesale->bizImage}}" width="255vh" height="255vh" > --}}
                {{-- online --}}
                <img src="{{asset('/'.$mostWholesale->bizImage)}}" alt="{{$mostWholesale->bizImage}}" width="255vh" height="255vh" >
            </a>
        </div>
        <div class="gallery-front-biz-name">
            <a class="gallery-front-button" href="{{route('Biz.show', ['biz'=>$mostWholesale->bizId])}}">
               <h4> {{$mostWholesale->bizName}} </h4>
            </a>
        </div>
    </div>

    @endforeach
</div>
