@php
    $galleries= DB::table('model')
    ->join('biz', 'model.bizId', '=', 'biz.bizId')
    ->select('model.modelId', 'model.modelImage','model.modelName','biz.bizId', 'biz.bizName')
    ->orderBy('model.modelId', 'desc')
    ->limit(20)
    ->distinct()
    ->get()
@endphp
<div class="galleryDiv">
    @php
        $bizID = 0;
    @endphp
    @foreach ($galleries as $gallery)
        @if ($bizID != $gallery->bizId )
            <div class="galleryItem">
                {{-- <img src="{{asset('/'.$gallery->modelImage)}}" alt="{{$gallery->bizName}}" width="255vw" height="255vh"> --}}
                <img src="{{asset('storage/'.$gallery->modelImage)}}" alt="{{$gallery->bizName}}" width="255vw" height="255vh">
                <a href="{{route('Biz.show', ['biz'=>$gallery->bizId])}}">
                    <p>{{$gallery->bizName}}</p>
                </a>
            </div>
        @endif
        @php
             $bizID =  $gallery->bizId;
        @endphp
    @endforeach
</div>
