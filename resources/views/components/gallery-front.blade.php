<div class="galleryDiv">
    @php
        $bizID = 0;
    @endphp

<div class="front-title">
    <div class="front-title-gallery">
        <h5>Ultímos Modelos</h5>
    </div>
</div>

    @foreach ($galleries as $gallery)
        @if ($bizID != $gallery->bizId )
            <div class="gallery-item">

                <div class="gallery-model-name">
                    {{$gallery->modelName}}
                </div>

                <div class="gallery-image">
                     <a href="{{route('Modelo.show', ['modelo'=>$gallery->modelId])}}">
                        {{-- <img src="{{asset('storage/'.$gallery->modelImage)}}" alt="{{$gallery->bizName}}" width="255vw" height="255vh"> --}}
                        <img src="{{asset('/'.$gallery->modelImage)}}" alt="{{$gallery->bizName}}" width="255vw" height="255vh">
                    </a>
                </div>

                <div class="gallery-biz-name">
                    <a class="gallery-button" href="{{route('Biz.show', ['biz'=>$gallery->bizId])}}">{{$gallery->bizName}}</a>
                </div>

            </div>
        @endif
        @php
            $bizID =  $gallery->bizId;
        @endphp
    @endforeach

</div>
