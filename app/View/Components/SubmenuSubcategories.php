<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class SubmenuSubcategories extends Component
{
    public string $categoria;
    public string $genero;
    public string $tipo;

    /**
     * Create a new component instance.
     */
    public function __construct(string $categoria, string $genero, string $tipo)
    {
        $this->categoria = $categoria;
        $this->genero = $genero;
        $this->tipo = $tipo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $modelsubcategories= DB::table('modelsubcategory')
        ->select('modelsubcatName')
        ->get();

        return view('components.submenu-subcategories',['modelsubcategories'=> $modelsubcategories]);
    }
}
