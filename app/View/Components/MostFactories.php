<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class MostFactories extends Component
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
        //variables
        $bizType = 'Fabricante';
        //get the best factories
        $mostFactories = DB::table('biz')
        ->join ('bizcategories', 'biz.bizcatId', '=', 'bizcategories.bizcatId')
        ->select(
            'biz.*',
            'bizcategories.bizcatName')
        ->limit(2)
        ->where('bizcategories.bizcatName', '=', $bizType)->get();

        return view('components.most-factories', ['mostFactories'=>$mostFactories]);
    }
}
