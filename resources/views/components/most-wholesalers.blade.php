<div class="front-factories">
    <div class="front-title-container">
            <h3>Mayoristas Destacados</h3>
    </div>
    @foreach ($mostWholesalers as $mostWholesale)
        <div class="gallery-front-item">
            {{-- image --}}
            <div class="gallery-front-image">
                <a href="{{route('Fabricantes.showFabricante', ['biz'=>$mostWholesale->bizSlug])}}">
                    {{-- local --}}
                    {{-- <img src="{{asset('storage/'.$mostWholesale->bizImage)}}" alt="{{$mostWholesale->bizImage}}" width="255vh" height="255vh" > --}}
                    {{-- online --}}
                    <img src="{{asset('/'.$mostWholesale->bizImage)}}" alt="{{$mostWholesale->bizImage}}" width="255vh" height="255vh" >
                </a>
            </div>
            <div class="gallery-front-biz-name">
                <a class="gallery-front-button" href="{{route('Wholesalers.showWholesaler', ['biz'=>$mostWholesale->bizSlug])}}">
                    {{$mostWholesale->bizName}}
                </a>
            </div>
        </div>
    @endforeach
</div>
