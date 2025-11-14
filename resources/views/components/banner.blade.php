{{-- css --}}
    {{-- local --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/components/banner.css')}}"> --}}
    {{-- end local --}}

    {{-- online --}}
        <link rel="stylesheet" href="{{ URL::asset('css/online/components/banner-min.css')}}">
    {{-- end online --}}
{{-- end css --}}

{{-- script --}}
    <script src="{{URL::asset('/scripts/banner.js')}}" defer></script>
{{-- end script --}}

<div class="banner-container">
    @if ($banners->isNotEmpty())
        @foreach ($banners as $banner)
            <div class="banner">
                <img src="{{asset('storage/'.$banner->bizImage)}}" alt="{{$banner->bizName}}" >
                <a href="{{route('Fabricantes.showFabricante', ['biz'=>$banner->bizSlug])}}">
                <div class="banner-text">
                    <p class="banner-text-head">{{$banner->bizName}}</p>
                    <p>{{$banner->saletypeName}}</p>
                    <small>Ver datalles...</small>
                </div>
                </a>
            </div>
        @endforeach
    @else
        <div class="banner">
        <a href="{{route('precios')}}">
            <div class="banner-text">
                <h3>Espacio Disponible</h3>
                <small>Ver datalles...</small>
            </div>
        </a>
    </div>
    @endif
</div>


