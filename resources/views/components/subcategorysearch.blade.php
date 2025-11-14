{{-- css --}}
    {{-- local --}}
    <link rel="stylesheet" href="{{asset('css/components/subcategorysearch.css')}}">
    {{-- online --}}
    <link rel="stylesheet" href="{{asset('css/online/components/subcategorysearch-min.css')}}">
{{-- end css --}}

<div class="subcategorysearch-div">
    <div class="subcategorysearch-title">
        Filtrar por tipo de zapato
    </div>

    @switch($bizcatNAME)
        @case('Fabricante')
            <div class="subcategorysearch">
                @foreach ($modelsubcategories as $modelsubcategory)
                <div>
                    <form action="{{route('Fabricantes.showFabricante', ['biz'=>$bizSLUG])}}" method="get">
                        <input type="submit" name="modelsubcatname" value="{{$modelsubcategory->modelsubcatName}}">
                    </form>
                </div>
                @endforeach
                <div>
                    <form action="{{route('Fabricantes.showFabricante', ['biz'=>$bizSLUG])}}" method="get">
                        <input type="submit" name="" value="Todos">
                    </form>
                </div>
            </div>

            @break
        @case('Mayorista')

            <div class="subcategorysearch">
                @foreach ($modelsubcategories as $modelsubcategory)
                <div>
                    <form action="{{route('Wholesalers.showWholesaler', ['biz'=>$bizSLUG])}}" method="get">
                        <input type="submit" name="modelsubcatname" value="{{$modelsubcategory->modelsubcatName}}">
                    </form>
                </div>
                @endforeach
                <div>
                    <form action="{{route('Wholesalers.showWholesaler', ['biz'=>$bizSLUG])}}" method="get">
                        <input type="submit" name="" value="Todos">
                    </form>
                </div>
            </div>

            @break
        @case('Minorista')

            <div class="subcategorysearch">
                @foreach ($modelsubcategories as $modelsubcategory)
                <div>
                    <form action="{{route('Retails.showRetailer', ['biz'=>$bizSLUG])}}" method="get">
                        <input type="submit" name="modelsubcatname" value="{{$modelsubcategory->modelsubcatName}}">
                    </form>
                </div>
                @endforeach
                <div>
                    <form action="{{route('Retails.showRetailer', ['biz'=>$bizSLUG])}}" method="get">
                        <input type="submit" name="" value="Todos">
                    </form>
                </div>
            </div>

            @break
        @default

    @endswitch



</div>

