<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idb extends Model
{
    public function student (){
        return $this->hasManyThrough(Student::class, Tsp::class);
    }
}
