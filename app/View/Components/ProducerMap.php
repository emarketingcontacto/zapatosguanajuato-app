<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProducerMap extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $latitude,
        public string $longitud,
        public string $bixName
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.producer-map');
    }
}
