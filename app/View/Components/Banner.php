<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Banner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $catName ){ }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $banners = DB::table('premium')
    ->join('biz','biz.bizId', '=', 'premium.bizId')
    ->join ('bizcategories', 'bizcategories.bizcatId', '=', 'biz.bizcatId')
    ->join('saletype', 'saletype.saletypeId', '=', 'biz.saletypeId')
    ->select(
        'biz.*', 'premium.*', 'bizcategories.*', 'saletype.*'
    )
    ->where('bizcategories.bizcatName', '=', $this->catName)
    ->get();
        return view('components.banner', ['banners'=>$banners]);
    }
}
