<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [ AuthController::class, 'view'])->name('login');
Route::post('/login', [ AuthController::class, 'login']);

Route::get('/logout', [ AuthController::class, 'logout']);

Route::get('/patients', [ PatientController::class, 'patientList' ])->middleware('auth');

Route::get('/add/patient', [ PatientController::class, 'patientForm' ])->middleware('auth');
Route::post('/add/patient', [ PatientController::class, 'addPatient' ])->middleware('auth');

Route::get('/add/village', function () {
    return view('forms.village');
})->middleware('auth');

Route::get('/patient/1/add/disease', function () {
    return view('forms.patient.disease');
})->middleware('auth');

Route::get('/patient/1/add/ilness', function () {
    return view('forms.patient.ilness');
})->middleware('auth');

Route::get('/patient/1/add/vaccination', function () {
    return view('forms.patient.vaccination');
})->middleware('auth');

Route::get('/patient/1/add/prescription', function () {
    return view('forms.patient.prescription');
})->middleware('auth');

Route::get('/add/vaccine', function () {
    return view('forms.vaccine');
})->middleware('auth');

Route::get('/add/ilness', function () {
    return view('forms.ilness');
})->middleware('auth');

Route::get('/add/disease', function () {
    return view('forms.disease');
})->middleware('auth');

Route::get('/add/medicine', function () {
    return view('forms.medicine');
})->middleware('auth');

Route::get('/patient/1', function () {
    return view('patient.template');
})->middleware('auth');

Route::get('/patient/1/illnesses', function () {
    return view('patient.illnesses');
})->middleware('auth');

Route::get('/patient/1/diseases', function () {
    return view('patient.diseases');
})->middleware('auth');

Route::get('/patient/1/vaccination', function () {
    return view('patient.vaccination');
})->middleware('auth');

Route::get('/patient/1/prescriptions', function () {
    return view('patient.prescriptions');
})->middleware('auth');

Route::get('/settings/print', function () {
    return view('settings.print');
})->middleware('auth');

Route::get('/settings/change', function () {
    return view('settings.change');
})->middleware('auth');

Route::get('/settings/addop', function () {
    return view('settings.addAdmin');
})->middleware('auth');
