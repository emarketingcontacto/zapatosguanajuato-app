
@php
    $galleries= DB::table('model')
    ->join('biz', 'model.bizId', '=', 'biz.bizId')
    ->select('model.modelId', 'model.modelImage','model.modelName','biz.bizId', 'biz.bizName')
    ->orderBy('model.modelId', 'desc')
    ->limit(10)
    ->distinct('biz.bizId')
    ->get()
@endphp

<div class="galleryDiv">
    @foreach ($galleries as $gallery)
        <div class="galleryItem">
            <img src="{{asset('storage/'.$gallery->modelImage)}}" alt="{{$gallery->bizName}}" width="255vw" height="255vh">
            <a href="{{route('Biz.show', ['biz'=>$gallery->bizId])}}">
                <p>{{$gallery->bizName}}</p>
            </a>
        </div>
    @endforeach

</div>
