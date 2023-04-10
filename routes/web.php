<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\IllnessController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VillageController;

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


/* ___________ AUTH __________ */
Route::get('/login', [ AuthController::class, 'view'])->name('login');
Route::post('/login', [ AuthController::class, 'login']);
Route::get('/logout', [ AuthController::class, 'logout']);


/* ___________ LOGGED-HOME __________ */
Route::get('/patients', [ PatientController::class, 'patientList' ])->middleware('auth');


/* ___________ -ADD-TO-PATIENT __________ */
Route::get('/patient/{patient}/add/disease', [ DiseaseController::class, 'patientDisease' ])->middleware('auth');
Route::post('/patient/{patient}/add/disease', [ DiseaseController::class, 'addToPatient' ])->middleware('auth');

Route::get('/patient/{patient}/add/illness', [ IllnessController::class, 'patientIllness' ])->middleware('auth');
Route::post('/patient/{patient}/add/illness', [ IllnessController::class, 'addToPatient' ])->middleware('auth');

Route::get('/patient/{patient}/add/vaccination', [ VaccineController::class, 'patientVaccination' ])->middleware('auth');
Route::post('/patient/{patient}/add/vaccination', [ VaccineController::class, 'addToPatient' ])->middleware('auth');

Route::get('/patient/{patient}/add/prescription', [ PrescriptionController::class, 'patientPrescription' ])->middleware('auth');
Route::post('/patient/{patient}/add/prescription', [ PrescriptionController::class, 'addToPatient' ])->middleware('auth');


/* ___________ ADD-GENERAL __________ */
Route::get('/add/patient', [ PatientController::class, 'patientForm' ])->middleware('auth');
Route::post('/add/patient', [ PatientController::class, 'addPatient' ])->middleware('auth');

Route::get('/add/village', [ VillageController::class, 'form' ])->middleware('auth');
Route::post('/add/village', [ VillageController::class, 'addVillage' ])->middleware('auth');

Route::get('/add/vaccine', [ VaccineController::class, 'form' ])->middleware('auth');
Route::post('/add/vaccine', [ VaccineController::class, 'addVaccine' ])->middleware('auth');

Route::get('/add/illness', [ IllnessController::class, 'form' ])->middleware('auth');
Route::post('/add/illness', [ IllnessController::class, 'addIllness' ])->middleware('auth');

Route::get('/add/disease', [ DiseaseController::class, 'form' ])->middleware('auth');
Route::post('/add/disease', [ DiseaseController::class, 'addDisease' ])->middleware('auth');

Route::get('/add/medicine', [ MedicineController::class, 'form' ])->middleware('auth');
Route::post('/add/medicine', [ MedicineController::class, 'addMedicine' ])->middleware('auth');


/* ___________ VIEW-PATIENT-DATA __________ */
Route::get('/patient/{patient}/illnesses', [ PatientController::class, 'illnesses' ])->middleware('auth');

Route::get('/patient/{patient}/vaccinations', [ PatientController::class, 'vaccinations' ])->middleware('auth');

Route::get('/patient/{patient}/diseases', [ PatientController::class, 'diseases' ])->middleware('auth');

Route::get('/patient/{patient}/prescriptions', [ PatientController::class, 'prescriptions' ])->middleware('auth');


/* ___________ SETTINGS __________ */
Route::get('/settings/print', function () {
    return view('settings.print');
})->middleware('auth');

Route::get('/settings/change', [ UserController::class, 'changeDataForm' ])->middleware('auth');
Route::post('/settings/change', [ UserController::class, 'changeData' ])->middleware('auth');

Route::get('/settings/addop', [ UserController::class, 'addUserForm' ])->middleware('auth');
Route::post('/settings/addop', [ UserController::class, 'addUser' ])->middleware('auth');
