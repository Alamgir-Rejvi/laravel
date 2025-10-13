<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function gigs()
    {
        return $this->belongsToMany(Gig::class, 'order_gig')->withPivot('quantity','price')->withTimestamps();
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

}
