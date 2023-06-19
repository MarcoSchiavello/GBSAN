<?php

namespace App\Http\Controllers;

use App\Models\Diagnose;
use App\Models\Patient;
use App\Models\Prescription;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller {

    private function getPDFData() {
        $json = json_decode(file_get_contents(storage_path() . "/pdf.json"), true);
        return $json;
    }

    function changePrintTemplateForm() {
        return view('settings.print', [ 'pdf' => $this->getPDFData() ]);
    }

    function changePrintTemplate(Request $request) {
        $data = [
            'name' => $request->hospital,
            'address' => $request->address,
            'contacts' => $request->contacts,
        ];

        fwrite(fopen(storage_path().'/pdf.json', 'w'), json_encode($data));
        

        return redirect('/settings/print');
    }

    function printTemplate() {
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('PDFs.template', [
            'pdf' => $this->getPDFData(),
        ]);
        
        return $pdf->stream('template.pdf', [ 'Attachment' => 0 ]);
    }
    
    function printDisease(int $patientId, int $diagnoseId) {
        $patient = Patient::find($patientId);

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('PDFs.disease', [
            'pdf' => $this->getPDFData(),
            'patient' => $patient,
            'diagnose' => Diagnose::find($diagnoseId)
        ]);
        
        return $pdf->stream($patient->name . '_' . $patient->surname . '_disease.pdf', [ 'Attachment' => 0 ]);
    }

    function printIllness(int $patientId, int $pivotId) {
        $patient = Patient::find($patientId);

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('PDFs.illness', [
            'pdf' => $this->getPDFData(),
            'patient' => $patient,
            'illness' => $patient->illnesses()->wherePivot('id', $pivotId)->first()
        ]);
        
        return $pdf->stream($patient->name . '_' . $patient->surname . '_illness.pdf', [ 'Attachment' => 0 ]);
    }

    function printVaccination(int $patientId, int $pivotId) {
        $patient = Patient::find($patientId);

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('PDFs.vaccination', [
            'pdf' => $this->getPDFData(),
            'patient' => $patient,
            'vaccination' => $patient->vaccinations()->wherePivot('id', $pivotId)->first()
        ]);
        
        return $pdf->stream($patient->name . '_' . $patient->surname . '_vaccination.pdf', [ 'Attachment' => 0 ]);
    }

    function printPrescription(int $patientId, int $prescriptionId) {
        $patient = Patient::find($patientId);

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('PDFs.prescription', [
            'pdf' => $this->getPDFData(),
            'patient' => $patient,
            'prescription' => Prescription::find($prescriptionId)
        ]);
        
        return $pdf->stream($patient->name . '_' . $patient->surname . '_prescription.pdf', [ 'Attachment' => 0 ]);
    }
}
