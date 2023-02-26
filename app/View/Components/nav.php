<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class nav extends Component {

    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $logo = true,
        public bool $auth = false,
    ) { }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.nav');
    }
}
