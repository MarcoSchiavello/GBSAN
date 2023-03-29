<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function patients() {
        return $this->belongsToMany(
            Patient::class,
            'patients_illnesses',
            'id_illness',
            'id_patient');
    }

    public function users() {
        return $this->belongsToMany(
            User::class,
            'patients_illnesses',
            'id_illness',
            'id_user');
    }
}
