<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller {
    function form() {
        return view('forms.disease');
    }

    function addDisease(Request $request) {
        $newDisease = new Disease;
        $newDisease->id = $request->id;
        $newDisease->name = $request->name;
        $newDisease->save();

        return redirect('/patients');
    }
}
