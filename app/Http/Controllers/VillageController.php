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

    function villages() {
        return view('settings.backoffice.villages', [ 'villages' => Village::all()]);
    }

    function updateVillage(Request $request, int $villageId) {
        $village = Village::find($villageId);
        $village->name = $request->name;
        $village->id = $request->id;
        $village->save();

        return redirect('/view/villages');
    }

    function updateVillageForm(int $villageId) {
        return view('forms.village', [ 'village' => Village::find($villageId) ]);
    }

    function deleteVillage(int $villageId) {
        (Village::find($villageId))->delete();
        return redirect('/view/villages');
    }
}
