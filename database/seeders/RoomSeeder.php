<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'name' => 'Tala',
                'price' => 100.00,
                'statut' => 'clean',
                'priority' => 'low',
                'capacity' => 2,
                'type_id' => 1,
                'size' => 30
            ],
            [
                'name' => 'Nelya',
                'price' => 150.00,
                'statut' => 'cleaning',
                'priority' => 'high',
                'capacity' => 3,
                'type_id' => 2,
                'size' => 30
            ],
            [
                'name' => 'Arinas',
                'price' => 200.00,
                'statut' => 'dirty',
                'priority' => 'high',
                'capacity' => 4,
                'type_id' => 3,
                'size' => 30
            ],
            [
                'name' => 'Kahina',
                'price' => 150.00,
                'statut' => 'dirty',
                'priority' => 'high',
                'capacity' => 4,
                'type_id' => 3,
                'size' => 30
            ],
            [
                'name' => 'Celia',
                'price' => 120.00,
                'statut' => 'dirty',
                'priority' => 'high',
                'capacity' => 4,
                'type_id' => 3,
                'size' => 30
            ],
        ];
        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
