<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IllnessController extends Controller {
    function form() {
        return view('forms.illness');
    }

    function addIllness(Request $request) {
        $newIllness = new Illness;
        $newIllness->id = $request->id;
        $newIllness->name = $request->name;
        $newIllness->save();

        return redirect('/patients');
    }

    function patientIllness(int $patientId) {
        $illnessesRaw = Illness::all('id', 'name');

        $illnesses = array_combine(
            $illnessesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $illnessesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        return view('forms.patient.illness', [ 'patient' => Patient::find($patientId), 'illnesses' => $illnesses ]);
    }

    function addToPatient(Request $request, int $patientId) {
        Patient::find($patientId)->illnesses()->attach($request->illnessId, [
            'start_date' => $request->date,
            'note' => $request->note,
            'id_user' => Auth::user()->id
        ]);

        return redirect("/patient/$patientId/illnesses");
    }

    function illnesses() {
        return view('settings.backoffice.illnesses', [ 'illnesses' => Illness::all()]);
    }

    function updateIllness(Request $request, string $illnessId) {
        $illness = Illness::find($illnessId);
        $illness->name = $request->name;
        $illness->id = $request->id;
        $illness->save();

        return redirect('/view/illnesses');
    }

    function updateIllnessForm(string $illnessId) {
        return view('forms.illness', [ 'illness' => Illness::find($illnessId) ]);
    }

    function deleteIllness(string $illnessId) {
        (Illness::find($illnessId))->delete();
        return redirect('/view/illnesses');
    }
}
