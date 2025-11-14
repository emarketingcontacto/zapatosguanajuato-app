{{-- css --}}
    {{-- local --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/components/gallery-front.css') }}" /> --}}
    {{-- online --}}
        <link rel="stylesheet" href="{{ URL::asset('css/online/components/gallery-front-min.css') }}" />
{{-- end css --}}

<div class="gallery-front">
    @php
        $bizID = 0;
    @endphp

    <div class="front-title-container">
        <div class="gallery-front-title">
            <h2>Nuevos Modelos</h2>
        </div>
    </div>

    @if ($galleries->isEmpty())
        <h2>No results</h2>
        @else
            @foreach ($galleries as $gallery)
                    @if ($bizID != $gallery->bizId )
                        <div class="gallery-front-item">

                            <div class="gallery-front-image">
                                <a href="{{route('Modelo.show', ['modelo'=>$gallery->modelId])}}">
                                    {{-- local --}}
                                    {{-- <img src="{{asset('storage/'.$gallery->modelImage)}}" alt="{{$gallery->bizName}}" width="255vw" height="255vh"> --}}
                                    {{-- online --}}
                                    <img src="{{asset('/'.$gallery->modelImage)}}" alt="{{$gallery->bizName}}" width="255vw" height="255vh">
                                </a>
                            </div>
                            @php
                                $urlBiz="";
                                switch ($gallery->bizcatName) {
                                    case 'Fabricante':
                                            $urlBiz = 'Fabricantes.showFabricante';
                                    break;
                                    case 'Mayorista':
                                            $urlBiz = 'Wholesalers.showWholesaler';
                                    break;
                                    case 'Minorista':
                                            $urlBiz = 'Retails.showRetailer';
                                    break;
                                    default:
                                        # code...
                                        break;
                                }
                            @endphp
                            <div class="gallery-front-model-name">
                                {{$gallery->modelName}}
                            </div>
                            <div class="gallery-front-model-category">
                                {{$gallery->bizcatName}}
                            </div>
                            <div class="gallery-front-biz-name">
                                <a class="gallery-front-button" href="{{route($urlBiz, ['biz'=>$gallery->bizSlug])}}">
                                    {{$gallery->bizName}}
                                </a>
                            </div>
                        </div>
                    @endif
                    @php
                        $bizID =  $gallery->bizId;
                    @endphp
            @endforeach
        @endif
</div>
