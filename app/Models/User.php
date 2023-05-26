<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;

    public function patients() {
        return $this->hasMany(Patient::class, 'id_user');
    }

    public function prescription() {
        return $this->hasMany(Prescription::class, 'id_user');
    }
    
    public function diagnoses() {
        return $this->hasMany(Diagnose::class, 'id_user');
    }

    public function illnesses() {
        return $this->belongsToMany(
            Illness::class,
            'patients_illnesses',
            'id_user',
            'id_illness')->withPivot('id','start_date', 'note', 'end_date');;
    }


    public function vaccines() {
        return $this->belongsToMany(
            Vaccine::class,
            'patients_vaccines',
            'id_user',
            'id_vaccine')->withPivot('id','date', 'next_date', 'note');
    }
}
