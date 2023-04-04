<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use Illuminate\Http\Request;

class IllnessController extends Controller {
    function form() {
        return view('forms.ilness');
    }

    function addIllness(Request $request) {
        $newIllness = new Illness;
        $newIllness->id = $request->id;
        $newIllness->name = $request->name;
        $newIllness->save();

        return redirect('/patients');
    }
}
