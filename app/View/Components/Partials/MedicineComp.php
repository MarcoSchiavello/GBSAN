<?php

namespace App\View\Components\Partials;

use App\Models\Diagnose;
use App\Models\Medicine;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MedicineComp extends Component {
    public $title;
    public $medicinesUsed;
    
    /**
     * Create a new component instance.
     */
    public function __construct(bool $title = true, $medicinesUsed = null) {
        $this->title = $title;
        $this->medicinesUsed = $medicinesUsed;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        $medicinesRaw = Medicine::all('id', 'name');

        $medicines = array_combine(
            $medicinesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $medicinesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        return view('components.partials.medicine-comp', [ 'medicines' => $medicines, 'medicinesUsed' => $this->medicinesUsed ?? [] ]);
    }
}