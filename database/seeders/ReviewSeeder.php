<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie' => 'Jojo Bizarre Adventure',
            'user' => '@luciyagatha',
            'rating' => '9/10',
            'date' => '18/02/2024'
        ]);

        Review::create([
            'movie' => 'Noragami',
            'user' => '@ciyawnzz',
            'rating' => '7/10',
            'date' => '21/03/2024'
        ]);

        Review::create([
            'movie' => 'Wind Breaker',
            'user' => '@hanasou',
            'rating' => '8/10',
            'date' => '09/05/2024'
        ]);

        Review::create([
            'movie' => 'Frieren: Beyond Journeys End',
            'user' => '@cittlesnowhite',
            'rating' => '10/10',
            'date' => '12/03/2024'
        ]);

        Review::create([
            'movie' => 'Solo Leveling',
            'user' => '@ciyaw.page',
            'rating' => '9/10',
            'date' => '09/05/2024'
        ]);
    }
}