<?php

namespace Database\Seeders;

use App\Models\Reservation;
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
                'statut' => 'Confirmed',
                'total_adults' => 2,
                'total_children' => 0,
                'ref' => 'admin',
                'user_id' => 1,
                'room_id' => 1,
            ],
            [
                'checkIn' => '2024-03-10',
                'checkOut' => '2024-03-15',
                'statut' => 'Due In',
                'total_adults' => 2,
                'total_children' => 0,
                'ref' => 'admin',
                'user_id' => 2,
                'room_id' => 2,
            ],
            [
                'checkIn' => '2024-03-20',
                'checkOut' => '2024-03-25',
                'statut' => 'Checked In',
                'total_adults' => 2,
                'total_children' => 0,
                'ref' => 'admin',
                'user_id' => 3,
                'room_id' => 3,
            ],

        ];

        foreach ($reservations as $reservation) {
            Reservation::create($reservation);
        }
    }
}
