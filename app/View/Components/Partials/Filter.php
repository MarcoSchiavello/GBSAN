<?php

namespace App\View\Components\Partials;

use App\Models\Disease;
use App\Models\Illness;
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

        $diseasesRaw = Disease::all('id', 'name');

        $diseases = array_combine(
            $diseasesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $diseasesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        $illnessesRaw = Illness::all('id', 'name');

        $illnesses = array_combine(
            $illnessesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $illnessesRaw->map(function($value) {
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
            'sex' => request()->get('sex'),
            'startDate' => request()->get('startDate'),
            'endDate' => request()->get('endDate'),
            'diseases' => request()->get('diseases'),
            'moranca' => request()->get('moranca'),
            'illnesses' => request()->get('illnesses'),
        ];

        return view('components.partials.filter', [ 'villages' => $villages, 'diseases' => $diseases, 'illnesses' => $illnesses, 'default' => $default ]);
    }
}
