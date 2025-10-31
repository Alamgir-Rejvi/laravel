<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    /* =============================
     |  RELATIONSHIPS ONLY
     |=============================*/

    // 🔗 Each product belongs to one buyer
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    // 🏭 Each product belongs to one manufacturer
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    // ⚙️ One product can have many production entries
    public function productions()
    {
        return $this->hasMany(Production::class);
    }

    // 🪶 Optional: If you have a product category system
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // 🧾 Optional: A product can have many orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
