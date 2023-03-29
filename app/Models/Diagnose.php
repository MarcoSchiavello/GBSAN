<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function patient() {
        return $this->belongsTo(Prescription::class, 'id_patient');
    }

    public function disease() {
        return $this->belongsTo(Disease::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function medicines() {
        return $this->belongsToMany(
            Medicine::class,
            'diagnoses_medicines',
            'id_diagnose',
            'id_medicine');
    }

}
