<?php

namespace App\Http\Utils;

use Illuminate\Http\Request;

class Validator {
    static function validatePatientForm(Request $request, bool $update = false) {
        $validationSet = [
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'moranca' => 'required|max:100',
            'village' => 'required|max:50',
            'birthDate' => 'required|date',
            'sex' => 'required|max:1',
            'code' => 'nullable|max:100',
            'cell' => 'nullable|max:20',
            'role' => 'nullable|max:100',
            'home' => 'nullable|max:100',
            'weight' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'bmi' => 'nullable|numeric',
            'bloodType' => 'nullable|max:5',
            'overview' => 'nullable',
            'cardFreq' => 'nullable|numeric',
            'minPres' => 'nullable|numeric',
            'maxPres' => 'nullable|numeric',
        ];

        if(!$update)
            $validationSet += [ 'img' => 'required' ];

        $request->validate($validationSet);
    }

    static function validateBackOffice(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'id' => 'required',
        ]);
    }

    static function validateVillage(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'desc' => 'nullable',
        ]);
    }

    static function validateDisease(Request $request) {
        $request->validate([
            'disease' => 'required|max:50',
            'date' => 'required|date',
            'note' => 'nullable',
        ]);
    }

    static function validateIllness(Request $request) {
        $request->validate([
            'illnessId' => 'required|max:50',
            'date' => 'required|date',
            'note' => 'nullable',
        ]);
    }

    static function validateVacciantion(Request $request) {
        $request->validate([
            'vaccineId' => 'required|max:50',
            'vaccinationDate' => 'required|date',
            'recallDate' => 'required|date',
            'note' => 'nullable',
        ]);
    }

    static function validateMedicine($request) {
        $request->validate([
            'medicine.*' => 'required|max:50',
            'startDate.*' => 'required|date',
            'endDate.*' => 'required|date|after:start_date.*',
            'when.*' => 'required|date_format:H:i',
            'dosage.*' => 'required|numeric',
        ]);
    }

    static function validateUser($request) {
        $request->validate([
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'birthDate' => 'required|date',
            'email' => 'required|max:150',
            'sex' => 'required|max:1',
            'username' => 'required|max:50',
            'password' => 'required|max:200',
        ]);
    }
}