<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Production extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'product_id',
        'order_no',
        'production_date',
        'target_quantity',
        'completed_quantity',
        'status',
        'remarks',
    ];

    // Relationships
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Accessor for progress percentage
    public function getProgressAttribute()
    {
        if ($this->target_quantity == 0) return 0;
        return round(($this->completed_quantity / $this->target_quantity) * 100, 2);
    }
}