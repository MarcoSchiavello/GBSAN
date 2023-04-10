<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    
    public function diagnoses() {
        return $this->hasMany(Diagnose::class, 'id_diagnose');
    }
}
