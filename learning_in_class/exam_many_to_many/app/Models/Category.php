<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public function order()
    {
        return $this->hasOneThrough(
            Order::class,   // Final model
            Product::class, // Intermediate model
            'category_id',  // Foreign key on products table
            'product_id',   // Foreign key on orders table
            'id',           // Local key on categories table
            'id'            // Local key on products table
        );
    }
}
