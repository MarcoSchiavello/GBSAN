<?php

namespace App\View\Components\Partials;

use App\Models\Village;
use Closure;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Symfony\Component\Console\Input\Input;

class Filter extends Component
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
        $villagesRaw = Village::all('id', 'name');

        $villages = array_combine(
            $villagesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $villagesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );


        $default = [
            'name' => request()->get('name'),
            'surname' => request()->get('surname'),
            'birthDate' => request()->get('birthDate'),
            'bloodType' => request()->get('bloodType'),
            'village' => request()->get('village'),
            'age' => request()->get('age'),
            'sex' => request()->get('sex')
        ];

        return view('components.partials.filter', [ 'villages' => $villages, 'default' => $default ]);
    }
}
