<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buyer extends Model
{   

    use HasFactory;

    
    protected $fillable = [
        'name',
        'company_name',
        'email',
        'phone',
        'country',
        'merchandiser_id',
    ];


    public function merchandiser() {
        return $this->belongsTo(Merchandiser::class);
    }
    public function orders() {
        return $this->hasMany(Order::class);
    }
}

    
