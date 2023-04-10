<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    function patientVaccination(int $patientId) {
        $vaccinesRaw = Vaccine::all('id', 'name');

        $vaccines = array_combine(
            $vaccinesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $vaccinesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        return view('forms.patient.vaccination', [ 'patient' => Patient::find($patientId), 'vaccines' => $vaccines ]);
    }

    function addToPatient(Request $request, int $patientId) {
        Patient::find($patientId)->vaccinations()->attach($request->vaccineId, [
            'date' => $request->vaccinationDate,
            'next_date' => $request->recallDate,
            'note' => $request->note,
            'id_user' => Auth::user()->id
        ]);

        return redirect("/patient/$patientId/vaccinations");
    }
}
