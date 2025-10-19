<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;


use App\Models\Owner;
use App\Models\Car;

class Mechanic extends Model
{
    // public function carOwner(): HasOneThrough
    // {
    //     return $this->hasOneThrough(Owner::class, Car::class);
    // }

    protected $fillable = ['name'];

    // Mechanic -> Car (one to many/one to one depending on design).
    public function car()
    {
        return $this->hasOne(Car::class); // যদি প্রতিটি mechanic র কেবল ১টা car থাকে
        // যদি mechanic এর একাধিক car থাকে, তাহলে hasMany ব্যবহার করবেন।
    }

    // hasOneThrough: Mechanic এর মাধ্যমে আমরা Owner অ্যাক্সেস করব (Mechanic -> Car -> Owner)
    public function owner(): HasOneThrough
    {
        // parameters:
        // (Related, Through, firstKeyOnThroughTable, secondKeyOnFinalTable, localKeyOnThisModel, localKeyOnThroughModel)
        // এখানে: through table = cars, through.foreign = mechanic_id
        // final table owner.foreign = car_id
        return $this->hasOneThrough(
            Owner::class, // final related model
            Car::class,   // through model
            'mechanic_id', // foreign key on cars table...
            'car_id',      // foreign key on owners table...
            'id',          // local key on mechanics table
            'id'           // local key on cars table
        );
    }
}
