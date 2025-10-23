<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Gig;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 🔹 Create 10 users and each user will have one profile
        User::factory()
            ->count(10)
            ->create()
            ->each(function ($user) {
                $user->profile()->create([
                    'country' => 'Bangladesh',
                    'bio' => 'Sample bio',
                    'skills' => 'php, laravel, js',
                ]);
            });

        // 🔹 Create 8 categories
        Category::factory()->count(8)->create();

        // 🔹 Create 50 gigs
        Gig::factory()->count(50)->create();

        // 🔹 Create 30 orders
        Order::factory()->count(30)->create();
    }
}
