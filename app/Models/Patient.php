<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function illnesses() {
        return $this->belongsToMany(
            Illness::class,
            'patients_illnesses',
            'id_patient',
            'id_illness')->withPivot('start_date', 'note', 'end_date');
    }

    public function vaccinations() {
        return $this->belongsToMany(
            Vaccine::class,
            'patients_vaccines',
            'id_patient',
            'id_vaccine')->withPivot('date', 'next_date', 'note');
    }

    public function diagnoses() {
        return $this->hasMany(Diagnose::class, 'id_patient');
    }

    public function prescriptions() {
        return $this->hasMany(Prescription::class, 'id_patient');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function village() {
        return $this->belongsTo(Village::class, 'id_village');
    }

    public function age() {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }
}
