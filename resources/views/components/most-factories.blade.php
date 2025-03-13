
    <div class="front-factories">
        <div class="front-title">
            <div class="front-title-most">
                <h5>Fabricantes Destacados</h5>
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
                    <a class="gallery-front-button" href="{{route('Biz.show', ['biz'=>$mostfactory->bizId])}}">
                       <h3>{{$mostfactory->bizName}}</h3>
                    </a>
                </div>

            </div>
        @endforeach
    </div>

