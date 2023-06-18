<?php

namespace App\Http\Controllers;

use App\Http\Utils\Validator;
use App\Models\Diagnose;
use App\Models\Disease;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DiseaseController extends Controller {
    function form() {
        return view('forms.disease');
    }

    function addDisease(Request $request) {
        Validator::validateBackOffice($request);
        $newDisease = new Disease;
        $newDisease->id = $request->id;
        $newDisease->name = $request->name;
        $newDisease->save();

        return redirect('/patients');
    }

    function patientDisease(int $patientId) {
        $diseasesRaw = Disease::all('id', 'name');

        $diseases = array_combine(
            $diseasesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $diseasesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        return view('forms.patient.disease', [ 'patient' => Patient::find($patientId), 'diseases' => $diseases ]);
    }

    function addToPatient(Request $request, int $patientId) {
        Validator::validateDisease($request);
        $diagnose = new Diagnose;
        $diagnose->id_disease = $request->disease;
        $diagnose->id_patient = $patientId;
        $diagnose->id_user = Auth::user()->id;
        $diagnose->start_date = $request->date;
        $diagnose->note = $request->note;

        DB::transaction(function() use ($diagnose, $request)  {
            $diagnose->save();

            if($request->medicine !== null) {
                Validator::validateMedicine($request);
                for($i = 0; $i < count($request->medicine); $i++) {
                    Diagnose::find($diagnose->id)->medicines()->attach($request->medicine[$i], [
                        'start_date' => $request->startDate[$i],
                        'end_date' => $request->endDate[$i],
                        'when' => $request->when[$i],
                        'quantity' => $request->dosage[$i]
                    ]);
                }
            }
        });


        return redirect("/patient/$patientId/diseases");
    }

    function diseases() {
        return view('settings.backoffice.diseases', [ 'diseases' => Disease::all()]);
    }

    function updateDisease(Request $request, string $diseaseId) {
        Validator::validateBackOffice($request);
        $disease = Disease::find($diseaseId);
        $disease->name = $request->name;
        $disease->id = $request->id;
        $disease->save();

        return redirect('/view/diseases');
    }

    function updateDiseaseForm(string $diseaseId) {
        return view('forms.disease', [ 'disease' => Disease::find($diseaseId) ]);
    }

    function deleteDisease(string $diseaseId) {
        (Disease::find($diseaseId))->delete();
        return redirect('/view/diseases');
    }
}
