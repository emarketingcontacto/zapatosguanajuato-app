
    <div class="front-factories">
        <div class="front-title-container">
            <h3>Fabricantes Destacados</h3>
        </div>
        @foreach ($mostFactories as $mostfactory)
            <div class="gallery-front-item">
                {{-- image --}}
                <div class="gallery-front-image">
                    <a href="{{route('Fabricantes.showFabricante', ['biz'=>$mostfactory->bizSlug])}}">
                        {{-- online --}}
                        <img src="{{asset('/'.$mostfactory->bizImage)}}" alt="{{$mostfactory->bizImage}}" width="255vh" height="255vh" >
                        {{-- local --}}
                        {{-- <img src="{{asset('storage/'.$mostfactory->bizImage)}}" alt="{{$mostfactory->bizImage}}" width="255vh" height="255vh" > --}}
                    </a>
                </div>
                <div class="gallery-front-biz-name">
                    <a class="gallery-front-button" href="{{route('Fabricantes.showFabricante', ['biz'=>$mostfactory->bizSlug])}}">
                       {{$mostfactory->bizName}}
                    </a>
                </div>

            </div>
        @endforeach
    </div>

