<?php

namespace App\Models;
use App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class Tsp extends Model
{
    public function tsp(){
        return $this->belongsTo('Student :: class');
    }
}
