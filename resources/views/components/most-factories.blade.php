
    <div class="front-factories">
        <div class="front-title">
            <div class="front-title-most">
                <h5>Fabricantes Destacados</h5>
            </div>
        </div>
        @foreach ($mostFactories as $mostfactory)
            <div class="gallery-item">
                {{-- image --}}
                <div class="gallery-image">
                    <a href="{{route('Biz.show', ['biz'=>$mostfactory->bizId])}}">
                        <img src="{{asset('/'.$mostfactory->bizImage)}}" alt="{{$mostfactory->bizImage}}" width="155vh" height="155vh" >
                    </a>
                </div>
                <div class="gallery-biz-name">
                    <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$mostfactory->bizId])}}">
                        {{$mostfactory->bizName}}
                    </a>
                </div>

            </div>
        @endforeach
    </div>

