<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Foundation\Mix;
use Illuminate\Http\Request;

class MedicineController extends Controller {
    function form() {
        return view('forms.medicine');
    }

    function addMedicine(Request $request) {
        $newMedicine = new Medicine;
        $newMedicine->id = $request->id;
        $newMedicine->name = $request->name;
        $newMedicine->save();

        return redirect('/patients');
    }
}
