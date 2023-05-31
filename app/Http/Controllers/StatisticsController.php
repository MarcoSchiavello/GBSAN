<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller {
    
    function statistics() {
        return view('statistics', [ 'data' => [ [ 'name' => 'ciao', 'number' => 2 ], [ 'name' => 'caiao', 'number' => 10 ] ] ]);
    }
}
