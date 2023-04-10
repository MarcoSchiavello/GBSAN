<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;

    public function patients() {
        return $this->belongsToMany(
            Patient::class,
            'patients_vaccines',
            'id_vaccine',
            'id_patient')->withPivot('date', 'next_date', 'note');
    }

    public function users() {
        return $this->belongsToMany(
            User::class,
            'patients_vaccines',
            'id_vaccine',
            'id_user')->withPivot('date', 'next_date', 'note');
    }
}
