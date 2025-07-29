<script src="{{URL::asset('/scripts/banner.js')}}" defer></script>
<link rel="stylesheet" href="{{ URL::asset('css/banner.css')}}">
@php
    $banners = DB::table('premium')
    ->join('biz','biz.bizId', '=', 'premium.bizId')
    ->join ('bizcategories', 'bizcategories.bizcatId', '=', 'biz.bizcatId')
    ->join('saletype', 'saletype.saletypeId', '=', 'biz.saletypeId')
    ->select(
        'biz.*', 'premium.*', 'bizcategories.*', 'saletype.*'
    )
    ->where('bizcategories.bizcatName', '=', $catName)
    ->get();
@endphp

<div class="banner-container">
    @if ($banners->isNotEmpty())
        @foreach ($banners as $banner)
            <div class="banner">
                <img src="{{asset('storage/'.$banner->bizImage)}}" alt="{{$banner->bizName}}" >
                <a href="{{route('Biz.show', ['biz'=>$banner->bizId])}}">
                <div class="banner-text">
                    <h3>{{$banner->bizName}}</h3>
                    <p>{{$banner->saletypeName}}</p>
                    <small>Ver datalles...</small>
                </div>
                </a>
            </div>
        @endforeach
    @else
        <div class="banner">
        <a href="{{route('Anunciantes')}}">
            <div class="banner-text">
                <h3>Espacio Disponible</h3>
                <small>Ver datalles...</small>
            </div>
        </a>
    </div>
    @endif
</div>


