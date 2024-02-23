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
        $reviews = [
            [
                'description' => 'A wonderful stay with excellent service!',
                'date' => now()->subDays(5),
                'user_id' => 1,
            ],
            [
                'description' => 'Clean rooms and friendly staff.',
                'date' => now()->subDays(3),
                'user_id' => 1,
            ],
            [
                'description' => 'Great amenities and comfortable beds.',
                'date' => now()->subDays(2),
                'user_id' => 1,
            ],
            [
                'description' => 'Fantastic experience! The hotel exceeded my expectations.',
                'date' => now()->subDays(7),
                'user_id' => 1,
            ],
            [
                'description' => 'Enjoyed the delicious food at the hotel restaurant.',
                'date' => now()->subDays(4),
                'user_id' => 1,
            ],
            [
                'description' => 'Attentive staff and a relaxing atmosphere.',
                'date' => now()->subDays(1),
                'user_id' => 1,
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
