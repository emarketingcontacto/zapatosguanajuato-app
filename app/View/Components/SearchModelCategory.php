<?php

namespace App\View\Components;

use Closure;
use App\Models\ModelCategory;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SearchModelCategory extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $bizcategory, public string $genero )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $searchmodelcategories = ModelCategory::all();
        return view('components.search-model-category', ['searchmodelcategories'=>$searchmodelcategories]);
    }
}
