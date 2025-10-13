<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gig>
 */
class GigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seller_id' => User::factory(),
        'category_id' => Category::factory(),
        'title' => $this->faker->sentence(4),
        'description' => $this->faker->paragraph(),
        'price' => $this->faker->numberBetween(5,500),
        'delivery_time' => $this->faker->numberBetween(1,14),
        'status' => 'published',
        ];
    }
}
