
    <div class="front-factories">
        <div class="front-title">
            <div class="front-title-most">
                <h3>Fabricantes Destacados</h3>
            </div>
        </div>
        @foreach ($mostFactories as $mostfactory)
            <div class="gallery-front-item">
                {{-- image --}}
                <div class="gallery-front-image">
                    <a href="{{route('Biz.show', ['biz'=>$mostfactory->bizId])}}">
                        {{-- online --}}
                        <img src="{{asset('/'.$mostfactory->bizImage)}}" alt="{{$mostfactory->bizImage}}" width="255vh" height="255vh" >
                        {{-- local --}}
                        {{-- <img src="{{asset('storage/'.$mostfactory->bizImage)}}" alt="{{$mostfactory->bizImage}}" width="255vh" height="255vh" > --}}
                    </a>
                </div>
                <div class="gallery-front-biz-name">
                    <a class="gallery-front-button" href="{{route('Biz.show', ['biz'=>$mostfactory->bizSlug])}}">
                       <h4>{{$mostfactory->bizName}}</h4>
                    </a>
                </div>

            </div>
        @endforeach
    </div>

