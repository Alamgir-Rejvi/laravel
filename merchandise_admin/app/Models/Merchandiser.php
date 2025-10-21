<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchandiser extends Model
{
    public function buyers()
{
    return $this->hasMany(Buyer::class);
}

}
