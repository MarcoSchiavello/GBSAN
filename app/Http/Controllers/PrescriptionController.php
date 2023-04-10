<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Prescription;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrescriptionController extends Controller {
    function patientPrescription(int $patientId) {
        return view('forms.patient.prescription', [ 'patient' => Patient::find($patientId) ]);
    }

    function addToPatient(Request $request, int $patientId) {
        $prescription = new Prescription;
        $prescription->prescription = $request->prescription;
        $prescription->id_user = Auth::user()->id;
        $prescription->id_patient = $patientId;
        $prescription->date = (new DateTime())->format("Y-m-d");

        DB::transaction(function() use ($prescription, $request)  {
            $prescription->save();

            for($i = 0; $i < count($request->medicine); $i++) {
                Prescription::find($prescription->id)->medicines()->attach($request->medicine[$i], [
                    'start_date' => $request->startDate[$i],
                    'end_date' => $request->endDate[$i],
                    'when' => $request->when[$i],
                    'quantity' => $request->dosage[$i]
                ]);
            }
        });


        return redirect("/patient/$patientId/prescriptions");
    }
}
