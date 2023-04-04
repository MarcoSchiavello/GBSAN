<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller {
    function form() {
        return view('forms.village');
    }

    function addVillage(Request $request) {
        $newVillage = new Village;
        $newVillage->name = $request->name;
        $newVillage->desc = $request->desc;
        $newVillage->save();

        return redirect('/patients');
    }
}
