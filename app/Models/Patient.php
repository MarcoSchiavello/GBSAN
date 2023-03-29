<?php

namespace App\Models;

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
            'id_illness');
    }

    public function vaccines() {
        return $this->belongsToMany(
            Vaccine::class,
            'patients_vaccines',
            'id_patient',
            'id_vaccine');
    }

    public function diagnoses() {
        return $this->hasMany(Diagnose::class);
    }

    public function prescriptions() {
        return $this->hasMany(Prescription::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function village() {
        return $this->belongsTo(Village::class, 'id_village');
    }
}
