<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class nav extends Component
{
    private $logo;
    private $logged;

    /**
     * Create a new component instance.
     */
    public function __construct($logo = true, $logged = false) {
        $this->logo = $logo;
        $this->logged = $logged;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.nav');
    }
}
