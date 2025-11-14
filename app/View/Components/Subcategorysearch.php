<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Subcategorysearch extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public int $bizID, public string $bizSLUG, public string $bizcatNAME){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
         $modelsubcategories= DB::table('model')
        ->join('modelsubcategory','model.modelsubcatId','=','modelsubcategory.modelsubcatId')
        ->select('model.modelsubcatId', 'modelsubcategory.modelsubcatName')
        ->distinct('modelsubcategory.modelsubcatId')
        ->where('model.bizId', '=', $this->bizID)
        ->get();

        return view('components.subcategorysearch',['modelsubcategories'=>$modelsubcategories]);
    }
}
