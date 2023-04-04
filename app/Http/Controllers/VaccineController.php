<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller {
    function form() {
        return view('forms.vaccine');
    }

    function addVaccine(Request $request) {
        $newVaccine = new Vaccine;
        $newVaccine->id = $request->id;
        $newVaccine->name = $request->name;
        $newVaccine->save();

        return redirect('/patients');
    }
}
