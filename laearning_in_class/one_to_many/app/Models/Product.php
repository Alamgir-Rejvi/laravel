<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id'];

    // প্রতিটি প্রোডাক্ট একটি ক্যাটাগরির অন্তর্গত
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
