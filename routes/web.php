<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});


Route::get('/patients', function () {
    return view('patients');
});

Route::get('/add/patient', function () {
    return view('forms.patient');
});

Route::get('/add/village', function () {
    return view('forms.village');
});

Route::get('/patient/1/add/disease', function () {
    return view('forms.patient.disease');
});

Route::get('/patient/1/add/ilness', function () {
    return view('forms.patient.ilness');
});

Route::get('/patient/1/add/vaccination', function () {
    return view('forms.patient.vaccination');
});

Route::get('/add/vaccine', function () {
    return view('forms.vaccine');
});

Route::get('/add/ilness', function () {
    return view('forms.ilness');
});

Route::get('/add/disease', function () {
    return view('forms.disease');
});

Route::get('/patient/1', function () {
    return view('patient.template');
});

Route::get('/patient/1/illnesses', function () {
    return view('patient.illnesses');
});

Route::get('/patient/1/diseases', function () {
    return view('patient.diseases');
});

Route::get('/patient/1/vaccination', function () {
    return view('patient.vaccination');
});

Route::get('/settings/print', function () {
    return view('settings.print');
});

