<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservations = [
            [
                'checkIn' => '2024-03-01',
                'checkOut' => '2024-03-05',
                'guests' => 2,
                'statut' => 'Confirmed',
                'user_id' => 1, // Replace with the actual user ID
            ],
            [
                'checkIn' => '2024-03-10',
                'checkOut' => '2024-03-15',
                'guests' => 3,
                'statut' => 'Due In',
                'user_id' => 2, // Replace with the actual user ID
            ],
            [
                'checkIn' => '2024-03-20',
                'checkOut' => '2024-03-25',
                'guests' => 4,
                'statut' => 'Checked In',
                'user_id' => 3, // Replace with the actual user ID
            ],
            
        ];

        foreach ($reservations as $reservation) {
            Reservation::create($reservation);
        }
    }
}
