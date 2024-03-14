<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class Subcategories extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $modelsubcategories= DB::table('modelsubcategory')
        ->select('modelsubcatName')
        ->get();
        return view('components.subcategories', ['modelsubcategories'=> $modelsubcategories]);
    }
}
