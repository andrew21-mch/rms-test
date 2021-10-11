<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rms_result extends Model
{
    use HasFactory;
    public function Rms_result() {
             return $this->hasOne('App\Models\Rms_student');
         }
}
