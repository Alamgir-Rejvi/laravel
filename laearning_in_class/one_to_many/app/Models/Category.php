<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // এক ক্যাটাগরির অনেক প্রোডাক্ট থাকতে পারে
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
