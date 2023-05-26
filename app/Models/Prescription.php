<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function documents() {
        return $this->hasMany(Document::class, 'id_prescription');
    }

    public function patient() {
        return $this->belongsTo(Prescription::class, 'id_patient');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function medicines() {
        return $this->belongsToMany(
            Medicine::class,
            'prescriptions_medicines',
            'id_prescription',
            'id_medicine')->withPivot('id', 'start_date', 'when', 'end_date', 'quantity');
    }
}
