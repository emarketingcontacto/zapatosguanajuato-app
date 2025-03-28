<div class="gallery-front">
    @php
        $bizID = 0;
    @endphp

<div class="front-title">
    <div class="front-title-gallery">
        <h3>Últimos Modelos</h3>
    </div>
</div>

    @foreach ($galleries as $gallery)
        @if ($bizID != $gallery->bizId )
            <div class="gallery-front-item">

                <div class="gallery-front-model-name">
                    {{$gallery->modelName}}
                </div>

                <div class="gallery-front-image">
                     <a href="{{route('Modelo.show', ['modelo'=>$gallery->modelId])}}">
                        {{-- local --}}
                        {{-- <img src="{{asset('storage/'.$gallery->modelImage)}}" alt="{{$gallery->bizName}}" width="255vw" height="255vh"> --}}
                        {{-- online --}}
                        <img src="{{asset('/'.$gallery->modelImage)}}" alt="{{$gallery->bizName}}" width="255vw" height="255vh">
                    </a>
                </div>

                <div class="gallery-front-biz-name">
                    <a class="gallery-front-button" href="{{route('Biz.show', ['biz'=>$gallery->bizId])}}">
                        <h4>{{$gallery->bizName}}</h4>
                    </a>
                </div>

            </div>
        @endif
        @php
            $bizID =  $gallery->bizId;
        @endphp
    @endforeach

</div>
