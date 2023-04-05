<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function Termwind\render;

class PatientController extends Controller {
    function patientList() {
        return view('patients', [ 'patients' => Patient::all() ]);
    }

    function patientForm() {
        return view('forms.patient');
    }

    function addPatient(Request $request) {
        $request->validate([
            'img' => 'required'
        ]);
        $Date = new DateTime();
        $Date->setTimezone(new DateTimeZone('Europe/Rome'));

        $patient = new Patient;
        $patient->name = $request->name;
        $patient->surname = $request->surname;
        $patient->code = $request->code;
        $patient->cell = $request->cell;
        $patient->role = $request->role;
        $patient->home = $request->home;
        $patient->moransa = $request->moransa;
        $patient->weight = $request->weight;
        $patient->height = $request->height;
        $patient->birth_date = $request->birthDate;
        $patient->bmi = $request->bmi;
        $patient->sex = $request->sex;
        $patient->blood_type = $request->bloodType;
        $patient->last_modified = $Date->format("Y-m-d H:i:s");
        $patient->overview = $request->overview;
        $patient->card_freq = $request->cardFreq;
        $patient->min_press = $request->minPres;
        $patient->max_press = $request->maxPres;
        $patient->id_village = $request->village;
        $patient->id_user =  Auth::user()->id;

        DB::transanction(function() use ($patient, $request) {
            $patient->save();

            $fileExt = $request->file('img')->getClientOriginalExtension();
            $destinationPath = 'public/images/profile/'. $patient->id . '.' . $fileExt;
            $request->file('img')->storeAs($destinationPath);
            $patient->img = $destinationPath;
            $patient->save();
        });

        return redirect('/patients');
    }
}
