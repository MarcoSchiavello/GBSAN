<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function diagnoses() {
        return $this->belongsToMany(
            Diagnose::class,
            'diagnoses_medicines',
            'id_medicine',
            'id_diagnose');
    }

    public function prescriptions() {
        return $this->belongsToMany(
            Prescription::class,
            'prescriptions_medicines',
            'id_medicine',
            'id_prescriprion');
    }
}
