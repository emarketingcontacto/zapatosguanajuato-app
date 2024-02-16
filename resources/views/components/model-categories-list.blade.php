{{--select model categories --}}
@php
    $modelcategoriesbiz = DB::table('modelcategory')
    ->join('modelcategory_biz', 'modelcategory.modelcatId', '=', 'modelcategory_biz.modelcatId')
    ->select('modelcategory.modelcatName')
    ->where('modelcategory_biz.bizId', '=', $bizID)
    ->get();
@endphp

<div class="d-flex justify-content-around">
    @foreach ($modelcategoriesbiz as $modelcategorybiz)
        <div class="modelcategorieslist">
            @switch($modelcategorybiz->modelcatName)
                @case('Damas')
                    <i class="bi bi-gender-female"></i>
                @break

                @case('Hombres')
                    <i class="bi bi-gender-male"></i>
                @break

                @case('Niñas')
                    <i class="bi bi-balloon-heart-fill"></i>
                @break

                @case('Niños')
                    <i class="bi bi-balloon-fill"></i>
                @break

                @default
            @endswitch
                    <p>{{$modelcategorybiz->modelcatName}}</p>
        </div>
    @endforeach
</div>
