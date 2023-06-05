<?php

namespace App\Http\Controllers;

use App\Models\Diagnose;
use App\Models\Disease;
use App\Models\Illness;
use App\Models\Patient;
use App\Models\Prescription;
use App\Models\User;
use App\Models\Vaccine;
use App\Models\Village;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\MySqlConnection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Type\Integer;

use function Termwind\render;

class PatientController extends Controller {
    function patientList(Request $request) {
        $patients = Patient::whereRaw('TRUE');

        if(!empty($request->get('illnesses'))) {
            $patients = $patients
            ->whereHas('illnesses', function($q) use ($request) {
                $query = $q;
                $query = $query->whereDate('id_illness', '=', $request->get('illnesses') );

                if(!empty($request->get('startDate')))
                    $query = $query->whereDate('start_date', '>=', date($request->get('startDate')) );

                if(!empty($request->get('endDate')))
                    $query = $query->whereDate('start_date', '<=', date($request->get('endDate')) );
            });
        }

        if(!empty($request->get('diseases'))) {
            $patients = $patients
            ->whereHas('diagnoses', function($q) use ($request) {
                $query = $q;
                $query = $query->whereDate('id_disease', '=', $request->get('diseases') );

                if(!empty($request->get('startDate')))
                    $query = $query->whereDate('start_date', '>=', date($request->get('startDate')) );

                if(!empty($request->get('endDate')))
                    $query = $query->whereDate('start_date', '<=', date($request->get('endDate')) );
            });
        }


        $patients->where('name', 'LIKE', "%" . trim($request->get('name')) . "%")
        ->where('surname', 'LIKE', "%" . trim($request->get('surname')) . "%")
        ->where('moranca', 'LIKE', "%" . trim($request->get('moranca')) . "%")
        ->where('birth_date', 'LIKE',  (empty($request->get('birthDate')) ? "%" : $request->get('birthDate')) )
        ->where('blood_type', 'LIKE',  (empty($request->get('bloodType')) ? "%" : $request->get('bloodType')) )
        ->where('id_village', 'LIKE',  (empty($request->get('villages')) ? "%" : $request->get('villages')) )
        ->where('sex', 'LIKE',  (empty($request->get('sex')) ? "%" : $request->get('sex')));

        if($request->get('age') === '0') {
            $patients = $patients->whereDate('birth_date', '>', now()->subYears(1));
        } else if(!empty($request->get('age'))) {
            $patients = $patients
            ->whereDate('birth_date', '<=', now()->subYears($request->get('age')))
            ->whereYear('birth_date', '>=', now()->subYears($request->get('age')));
        }
            
        $patients = $patients->get();
        
        return view('patients', [ 'patients' => $patients ]);
    }

    function patientForm() {
        $villagesRaw = Village::all('id', 'name');
        
        $villages = array_combine(
            $villagesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $villagesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        return view('forms.patient', [ 'villages' => $villages]);
    }

    function updatePatientForm(int $patientId) {
        $villagesRaw = Village::all('id', 'name');
        
        $villages = array_combine(
            $villagesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $villagesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        return view('forms.patient', [ 'villages' => $villages, 'patient' => $patientId, 'patient' => Patient::find($patientId) ]);
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
        $patient->moranca = $request->moranca;
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
        $patient->id_user = Auth::user()->id;

        DB::transaction(function() use ($patient, $request)  {
            $patient->save();

            $fileExt = $request->file('img')->getClientOriginalExtension();
            $realPath = 'public/images/profile/'. $patient->id . '.' . $fileExt;
            $destinationPath = 'storage/images/profile/'. $patient->id . '.' . $fileExt;
            $request->file('img')->storeAs($realPath);
            $patient->img = $destinationPath;
            
            $patient->save();
        });

        return redirect('/patients');
    }

    function illnesses(int $patientId) {
        return view('patient.illnesses', [ 'patient' => Patient::find($patientId) ]);
    }

    function vaccinations(int $patientId) {
        return view('patient.vaccinations', [ 'patient' => Patient::find($patientId) ]);
    }

    function diseases(int $patientId) {
        return view('patient.diseases', [ 'patient' => Patient::find($patientId) ]);
    }

    function prescriptions(int $patientId) {
        return view('patient.prescriptions', [ 'patient' => Patient::find($patientId) ]);
    }

    function deletePatient(int $patientId) {
        $patient = Patient::find($patientId);
        Storage::disk('public')->delete('/images/profile/' . basename($patient->img));
        $patient->delete();

        return redirect("/patients");
    }

    function deleteIllness(int $patientId, int $pivotId) {
        Patient::find($patientId)->illnesses()->wherePivot('id', '=', $pivotId)->detach();

        return redirect("/patient/$patientId/illnesses");
    }

    function deleteVaccination(int $patientId, int $pivotId) {
        Patient::find($patientId)->vaccinations()->wherePivot('id', '=', $pivotId)->detach();

        return redirect("/patient/$patientId/vaccinations");
    }

    function deleteDiagnose(int $patientId, int $diagnoseId) {
        Diagnose::find($diagnoseId)->delete();

        return redirect("/patient/$patientId/diseases");
    }

    function deletePrescription(int $patientId, int $prescriptionId) {
        $prescription = Prescription::find($prescriptionId);
        Storage::disk('public')->deleteDirectory('/documents/' . $prescriptionId);
        $prescription->delete();

        return redirect("/patient/$patientId/prescriptions");
    }

    function updatePatient(Request $request, int $patientId) {
        $Date = new DateTime();
        $Date->setTimezone(new DateTimeZone('Europe/Rome'));

        $patient = Patient::find($patientId);
        $patient->name = $request->name;
        $patient->surname = $request->surname;
        $patient->code = $request->code;
        $patient->cell = $request->cell;
        $patient->role = $request->role;
        $patient->home = $request->home;
        $patient->moranca = $request->moranca;
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
        $patient->id_user = Auth::user()->id;

        DB::transaction(function() use ($patient, $request)  {
            $patient->save();

            if($request->file('img') !== null) {
                $fileExt = $request->file('img')->getClientOriginalExtension();
                $realPath = 'public/images/profile/'. $patient->id . '.' . $fileExt;
                $destinationPath = 'storage/images/profile/'. $patient->id . '.' . $fileExt;
                $request->file('img')->storeAs($realPath);
                $patient->img = $destinationPath;
                
                $patient->save();
            }
        });

        return redirect('/patient/' . $patientId . '/diseases');
    }

    function updateIllnessForm(int $patientId, int $pivotId) {
        $illnessesRaw = Illness::all('id', 'name');

        $illnesses = array_combine(
            $illnessesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $illnessesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        $illnessWihPivot = Patient::find($patientId)
                        ->illnesses()
                        ->wherePivot('id', '=', $pivotId)
                        ->first();

        return view('forms.patient.illness', [ 'patient' => Patient::find($patientId), 
                                               'illnesses' => $illnesses, 
                                               'illness' => $illnessWihPivot ]);
    }

    function updateIllness(Request $request, int $patientId, int $pivotId) {
        DB::transaction(function () use ($patientId, $request, $pivotId) {
            Patient::find($patientId)->illnesses()->wherePivot('id', '=', $pivotId)->detach();
            Patient::find($patientId)->illnesses()->attach($request->illnessId, [
                'start_date' => $request->date,
                'note' => $request->note,
                'id_user' => Auth::user()->id
            ]);
        });

        return redirect("/patient/$patientId/illnesses");
    }

    function updateVaccinationForm(int $patientId, int $pivotId) {
        $vaccinesRaw = Vaccine::all('id', 'name');

        $vaccines = array_combine(
            $vaccinesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $vaccinesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        $vaccinationWihPivot = Patient::find($patientId)
                                ->vaccinations()
                                ->wherePivot('id', '=', $pivotId)
                                ->first();

        return view('forms.patient.vaccination', [ 'patient' => Patient::find($patientId), 
                                                   'vaccines' => $vaccines, 
                                                   'vaccination' => $vaccinationWihPivot ]);
    }

    function updateVaccination(Request $request, int $patientId, int $pivotId) {
        DB::transaction(function () use ($patientId, $request, $pivotId) {
            Patient::find($patientId)->vaccinations()->wherePivot('id', '=', $pivotId)->detach();
            Patient::find($patientId)->vaccinations()->attach($request->vaccineId, [
                'date' => $request->vaccinationDate,
                'next_date' => $request->recallDate,
                'note' => $request->note,
                'id_user' => Auth::user()->id
            ]);
        });

        return redirect("/patient/$patientId/vaccinations");
    }

    function updateDiagnoseForm(int $patientId, int $diagnoseId) {
        $diseasesRaw = Disease::all('id', 'name');

        $diseases = array_combine(
            $diseasesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $diseasesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        return view('forms.patient.disease', [ 'patient' => Patient::find($patientId), 
                                               'diseases' => $diseases,
                                               'diagnose' => Diagnose::find($diagnoseId)]);
    }

    function updateDiagnose(Request $request, int $patientId, int $diagnoseId) {
        $diagnose = Diagnose::find($diagnoseId);
        $diagnose->id_disease = $request->disease;
        $diagnose->id_user = Auth::user()->id;
        $diagnose->start_date = $request->date;
        $diagnose->note = $request->note;

        DB::transaction(function() use ($diagnose, $request)  {
            $diagnose->save();

            $diagnose->medicines()->detach();

            if($request->medicine !== null) {
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


    function updatePrescriptionForm(int $patientId, int $prescriptionId) {
        $diseasesRaw = Disease::all('id', 'name');

        $diseases = array_combine(
            $diseasesRaw->map(function($value) {
                return $value->name;
            })->toArray(), 
            $diseasesRaw->map(function($value) {
                return $value->id;
            })->toArray()
        );

        return view('forms.patient.prescription', [ 'patient' => Patient::find($patientId), 
                                                    'diseases' => $diseases,
                                                    'prescription' => Prescription::find($prescriptionId)]);
    }

    function updatePrescription(Request $request, int $patientId, int $prescriptionId) {
        $prescription = Prescription::find($prescriptionId);
        $prescription->prescription = $request->prescription;
        $prescription->id_user = Auth::user()->id;
        $prescription->id_patient = $patientId;

        DB::transaction(function() use ($prescription, $request)  {
            $prescription->save();

            $prescription->medicines()->detach();

            if($request->medicine !== null) {
                for($i = 0; $i < count($request->medicine); $i++) {
                    Prescription::find($prescription->id)->medicines()->attach($request->medicine[$i], [
                        'start_date' => $request->startDate[$i],
                        'end_date' => $request->endDate[$i],
                        'when' => $request->when[$i],
                        'quantity' => $request->dosage[$i]
                    ]);
                }
            }
        });

        return redirect("/patient/$patientId/prescriptions");
    }
}

