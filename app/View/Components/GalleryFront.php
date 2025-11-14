<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;


class GalleryFront extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
         $galleries= DB::table('model')
        ->join('biz', 'model.bizId', '=', 'biz.bizId')
        ->join('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
        ->select('model.modelId', 'model.modelImage','model.modelName','biz.bizId', 'biz.bizName', 'biz.bizSlug', 'bizcategories.bizcatName')
        ->orderBy('model.modelId', 'desc')
        ->limit(20)
        ->distinct()
        ->get();

        // $galleries = DB::table('model')
        // ->select('model.*')
        // ->orderBy('modelId', 'desc')
        // ->get();

        return view('components.gallery-front',['galleries'=>$galleries]);
    }
}
