<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\IllnessController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VillageController;
use Dompdf\Adapter\PDFLib;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* ___________ HOME __________ */
Route::get('/', function () {
    return view('index');
});

Route::get('/statistics', [ StatisticsController::class, 'statistics' ])->middleware('auth');


/* ___________ AUTH __________ */
Route::get('/login', [ AuthController::class, 'view'])->name('login');
Route::post('/login', [ AuthController::class, 'login']);
Route::get('/logout', [ AuthController::class, 'logout']);


/* ___________ LOGGED-HOME __________ */
Route::get('/patients', [ PatientController::class, 'patientList' ])->middleware('auth');


/* ___________ CRUD-TO-PATIENT __________ */
Route::get('/patient/{patient}/add/disease', [ DiseaseController::class, 'patientDisease' ])->middleware('auth');
Route::post('/patient/{patient}/add/disease', [ DiseaseController::class, 'addToPatient' ])->middleware('auth');
Route::delete('/patient/{patient}/delete/diagnose/{diagnose}', [ PatientController::class, 'deleteDiagnose' ])->middleware('auth');
Route::get('/patient/{patient}/update/diagnose/{diagnose}', [ PatientController::class, 'updateDiagnoseForm' ])->middleware('auth');
Route::put('/patient/{patient}/update/diagnose/{diagnose}', [ PatientController::class, 'updateDiagnose' ])->middleware('auth');
Route::post('/patient/{patient}/print/diagnose/{diagnose}', [ PDFLib::class, 'printDiagnose' ])->middleware('auth');

Route::get('/patient/{patient}/add/illness', [ IllnessController::class, 'patientIllness' ])->middleware('auth');
Route::post('/patient/{patient}/add/illness', [ IllnessController::class, 'addToPatient' ])->middleware('auth');
Route::delete('/patient/{patient}/delete/illness/{pivot}', [ PatientController::class, 'deleteIllness' ])->middleware('auth');
Route::get('/patient/{patient}/update/illness/{illness}', [ PatientController::class, 'updateIllnessForm' ])->middleware('auth');
Route::put('/patient/{patient}/update/illness/{illness}', [ PatientController::class, 'updateIllness' ])->middleware('auth');
Route::post('/patient/{patient}/print/illness/{illness}', [ PDFController::class, 'printIllness' ])->middleware('auth');

Route::get('/patient/{patient}/add/vaccination', [ VaccineController::class, 'patientVaccination' ])->middleware('auth');
Route::post('/patient/{patient}/add/vaccination', [ VaccineController::class, 'addToPatient' ])->middleware('auth');
Route::delete('/patient/{patient}/delete/vaccination/{pivot}', [ PatientController::class, 'deleteVaccination' ])->middleware('auth');
Route::get('/patient/{patient}/update/vaccination/{vaccination}', [ PatientController::class, 'updateVaccinationForm' ])->middleware('auth');
Route::put('/patient/{patient}/update/vaccination/{vaccination}', [ PatientController::class, 'updateVaccination' ])->middleware('auth');
Route::post('/patient/{patient}/print/vaccination/{vaccination}', [ PDFController::class, 'printVaccination' ])->middleware('auth');

Route::get('/patient/{patient}/add/prescription', [ PrescriptionController::class, 'patientPrescription' ])->middleware('auth');
Route::post('/patient/{patient}/add/prescription', [ PrescriptionController::class, 'addToPatient' ])->middleware('auth');
Route::delete('/patient/{patient}/delete/prescription/{prescription}', [ PatientController::class, 'deletePrescription' ])->middleware('auth');
Route::get('/patient/{patient}/update/prescription/{prescription}', [ PatientController::class, 'updatePrescriptionForm' ])->middleware('auth');
Route::put('/patient/{patient}/update/prescription/{prescription}', [ PatientController::class, 'updatePrescription' ])->middleware('auth');
Route::post('/patient/{patient}/print/prescription/{prescription}', [ PDFController::class, 'printPrescription' ])->middleware('auth');

Route::post('/patient/{patient}/add/prescription/{prescription}/document', [ PrescriptionController::class, 'addDocument' ])->middleware('auth');
Route::delete('/patient/{patient}/prescription/{prescription}/delete/document/{document}', [ PrescriptionController::class, 'deleteDocument' ])->middleware('auth');

/* ___________ CRUD-GENERAL __________ */
Route::get('/add/patient', [ PatientController::class, 'patientForm' ])->middleware('auth');
Route::post('/add/patient', [ PatientController::class, 'addPatient' ])->middleware('auth');
Route::delete('/delete/patient/{patient}', [ PatientController::class, 'deletePatient' ])->middleware('auth');
Route::get('/update/patient/{patient}', [ PatientController::class, 'updatePatientForm' ])->middleware('auth');
Route::put('/update/patient/{patient}', [ PatientController::class, 'updatePatient' ])->middleware('auth');

Route::get('/view/villages', [ VillageController::class, 'villages' ])->middleware('auth');
Route::get('/add/village', [ VillageController::class, 'form' ])->middleware('auth');
Route::post('/add/village', [ VillageController::class, 'addVillage' ])->middleware('auth');
Route::delete('/delete/village/{village}', [ VillageController::class, 'deleteVillage' ])->middleware('auth');
Route::get('/update/village/{village}', [ VillageController::class, 'updateVillageForm' ])->middleware('auth');
Route::put('/update/village/{village}', [ VillageController::class, 'updateVillage' ])->middleware('auth');

Route::get('/view/vaccines', [ VaccineController::class, 'vaccines' ])->middleware('auth');
Route::get('/add/vaccine', [ VaccineController::class, 'form' ])->middleware('auth');
Route::post('/add/vaccine', [ VaccineController::class, 'addVaccine' ])->middleware('auth');
Route::delete('/delete/vaccine/{vaccine}', [ VaccineController::class, 'deleteVaccine' ])->middleware('auth');
Route::get('/update/vaccine/{vaccine}', [ VaccineController::class, 'updateVaccineForm' ])->middleware('auth');
Route::put('/update/vaccine/{vaccine}', [ VaccineController::class, 'updateVaccine' ])->middleware('auth');

Route::get('/view/illnesses', [ IllnessController::class, 'illnesses' ])->middleware('auth');
Route::get('/add/illness', [ IllnessController::class, 'form' ])->middleware('auth');
Route::post('/add/illness', [ IllnessController::class, 'addIllness' ])->middleware('auth');
Route::delete('/delete/illness/{illness}', [ IllnessController::class, 'deleteIllness' ])->middleware('auth');
Route::get('/update/illness/{illness}', [ IllnessController::class, 'updateIllnessForm' ])->middleware('auth');
Route::put('/update/illness/{illness}', [ IllnessController::class, 'updateIllness' ])->middleware('auth');

Route::get('/view/diseases', [ DiseaseController::class, 'diseases' ])->middleware('auth');
Route::get('/add/disease', [ DiseaseController::class, 'form' ])->middleware('auth');
Route::post('/add/disease', [ DiseaseController::class, 'addDisease' ])->middleware('auth');
Route::delete('/delete/disease/{disease}', [ DiseaseController::class, 'deleteDisease' ])->middleware('auth');
Route::get('/update/disease/{disease}', [ DiseaseController::class, 'updateDiseaseForm' ])->middleware('auth');
Route::put('/update/disease/{disease}', [ DiseaseController::class, 'updateDisease' ])->middleware('auth');


Route::get('/view/medicines', [ MedicineController::class, 'medicines' ])->middleware('auth');
Route::get('/add/medicine', [ MedicineController::class, 'form' ])->middleware('auth');
Route::post('/add/medicine', [ MedicineController::class, 'addMedicine' ])->middleware('auth');
Route::delete('/delete/medicine/{medicine}', [ MedicineController::class, 'deleteMedicine' ])->middleware('auth');
Route::get('/update/medicine/{medicine}', [ MedicineController::class, 'updateMedicineForm' ])->middleware('auth');
Route::put('/update/medicine/{medicine}', [ MedicineController::class, 'updateMedicine' ])->middleware('auth');

/* ___________ VIEW-PATIENT-DATA __________ */
Route::get('/patient/{patient}/illnesses', [ PatientController::class, 'illnesses' ])->middleware('auth');

Route::get('/patient/{patient}/vaccinations', [ PatientController::class, 'vaccinations' ])->middleware('auth');

Route::get('/patient/{patient}/diseases', [ PatientController::class, 'diseases' ])->middleware('auth');

Route::get('/patient/{patient}/prescriptions', [ PatientController::class, 'prescriptions' ])->middleware('auth');


/* ___________ SETTINGS __________ */
Route::get('/settings/print', [ PDFController::class, 'changePrintTemplateForm'])->middleware('auth');
Route::post('/settings/print', [ PDFController::class, 'changePrintTemplate'])->middleware('auth');
Route::post('/print/template', [ PDFController::class, 'printTemplate'])->middleware('auth');

Route::get('/settings/change', [ UserController::class, 'changeDataForm' ])->middleware('auth');
Route::post('/settings/change', [ UserController::class, 'changeData' ])->middleware('auth');

Route::get('/settings/addop', [ UserController::class, 'addUserForm' ])->middleware('auth');
Route::post('/settings/addop', [ UserController::class, 'addUser' ])->middleware('auth');

