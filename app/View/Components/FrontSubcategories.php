<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class FrontSubcategories extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct() { }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        //DB Selecte Subcategories
        $frontsubcategories= DB::table('modelsubcategory')
        ->select('modelsubcatName')
        ->get();
        return view('components.front-subcategories', ['frontSubcategories'=>$frontsubcategories]);
    }
}
