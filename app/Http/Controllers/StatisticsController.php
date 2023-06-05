<?php

namespace App\Http\Controllers;

use App\Models\Diagnose;
use App\Models\Illness;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller {
    
    function statistics() {
        return view('statistics',[ 
            'topIllnesses' => $this->getTopIllnesses(),
            'topDiseases' => $this->getTopDiseases(),
            'topVaccines' => $this->getTopVaccines(),
            'topMorances' => $this->getTopMorances(),
            'topMedicines' => $this->getTopMedicines(),
            'ratio' => $this->getRatio(),
        ]);
    }

    function getTopIllnesses() {
        return  DB::table('patients_illnesses as pi')
                ->join('illnesses as i', 'i.id', '=', 'pi.id_illness')
                ->select(DB::raw('i.name as name'), DB::raw('count(*) as number'))
                ->groupBy('i.name')
                ->orderBy('number', 'DESC')
                ->take(10)
                ->get();
    }
    
    function getTopDiseases() {
        return  DB::table('diagnoses as dia')
                ->join('diseases as d', 'd.id', '=', 'dia.id_disease')
                ->select(DB::raw('name'), DB::raw('count(*) as number'))
                ->groupBy('d.name')
                ->orderBy('number', 'DESC')
                ->take(10)
                ->get();
    }

    function getTopVaccines() {
        return  DB::table('patients_vaccines as pv')
                ->join('vaccines as v', 'v.id', '=', 'pv.id_vaccine')
                ->select(DB::raw('v.name as name'), DB::raw('count(*) as number'))
                ->groupBy('v.name')
                ->orderBy('number', 'DESC')
                ->take(10)
                ->get();
    }

    function getTopMedicines() {
        $prescriptionMedicines = DB::table('diagnoses_medicines as dm')
                                ->join('medicines as m', 'm.id', '=', 'dm.id_medicine')
                                ->select(DB::raw('m.name as name'));

        $diagnoseMedicines = DB::table('prescriptions_medicines as pm')
                                ->join('medicines as m', 'm.id', '=', 'pm.id_medicine')
                                ->select(DB::raw('m.name as name'));

        return  DB::query()
                ->select('name', DB::raw('count(*) as number') )
                ->from($prescriptionMedicines->unionAll($diagnoseMedicines), 'allMedicines')
                ->groupBy('name')
                ->orderBy('number', 'DESC')
                ->take(10)
                ->get();
    }

    function getRatio() {
        return  Patient::has('illnesses')
                ->orHas('diagnoses')
                ->select(DB::raw('sex as name'), DB::raw('count(*) as number'))
                ->groupBy('sex')
                ->get();
    }

    function getTopMorances() {
        return  Patient::has('illnesses')
                ->orHas('diagnoses')
                ->select(DB::raw('moranca as name'), DB::raw('count(*) as number'))
                ->groupBy('moranca')
                ->orderBy('number', 'DESC')
                ->get();
    }
}
