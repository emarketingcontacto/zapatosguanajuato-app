
@php
    $modelsubcategories= DB::table('model')
        ->join('modelsubcategory','model.modelsubcatId','=','modelsubcategory.modelsubcatId')
        ->select('model.modelsubcatId', 'modelsubcategory.modelsubcatName')
        ->distinct('modelsubcategory.modelsubcatId')
        ->where('model.bizId', '=', $bizID)
        ->get();
@endphp

<div class="subcategorysearch-div">
    <div class="subcategorysearch-title">
        Filtrar por tipo de zapato
    </div>
    <div class="subcategorysearch">
        @foreach ($modelsubcategories as $modelsubcategory)
        <div>
            <form action="{{route('Biz.show', ['biz'=>$bizID])}}" method="get">
                <input type="submit" name="modelsubcatname" value="{{$modelsubcategory->modelsubcatName}}">
            </form>
        </div>
        @endforeach
        <div>
            <form action="{{$_SERVER['PHP_SELF']}}" method="get">
                <input type="submit" name="" value="Todos">
            </form>
        </div>
    </div>

</div>

