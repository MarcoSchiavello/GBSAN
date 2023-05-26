<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Foundation\Mix;
use Illuminate\Http\Request;

class MedicineController extends Controller {
    function form() {
        return view('forms.medicine');
    }

    function addMedicine(Request $request) {
        $newMedicine = new Medicine;
        $newMedicine->id = $request->id;
        $newMedicine->name = $request->name;
        $newMedicine->save();

        return redirect('/patients');
    }

    function medicines() {
        return view('settings.backoffice.medicines', [ 'medicines' => Medicine::all()]);
    }

    function updateMedicine(Request $request, string $medicineId) {
        $medicine = Medicine::find($medicineId);
        $medicine->name = $request->name;
        $medicine->id = $request->id;
        $medicine->save();

        return redirect('/view/medicines');
    }

    function updateMedicineForm(string $medicineId) {
        return view('forms.medicine', [ 'medicine' => Medicine::find($medicineId) ]);
    }

    function deleteMedicine(string $medicineId) {
        (Medicine::find($medicineId))->delete();
        return redirect('/view/medicines');
    }
}
