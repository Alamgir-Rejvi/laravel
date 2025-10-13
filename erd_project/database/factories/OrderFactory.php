<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Gig;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'buyer_id' => User::factory(),     // creates or links to a user
            'seller_id' => User::factory(),    // creates or links to another user
            'gig_id' => Gig::factory(),        // creates or links to a gig
            'amount' => $this->faker->numberBetween(10, 1000),
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
            'delivery_date' => $this->faker->dateTimeBetween('now', '+14 days'),
        ];
    }
}
