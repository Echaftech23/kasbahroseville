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
                'image' => 'standard-room.jpg',
                'type_id' => 1,
            ],
            [
                'name' => 'Nelya',
                'price' => 150.00,
                'statut' => 'cleaning',
                'priority' => 'high',
                'capacity' => 3,
                'image' => 'deluxe-room.jpg',
                'type_id' => 2,
            ],
            [
                'name' => 'Arinas',
                'price' => 200.00,
                'statut' => 'dirty',
                'priority' => 'high',
                'capacity' => 4,
                'image' => 'suite-room.jpg',
                'type_id' => 3,
            ],
            [
                'name' => 'Kahina',
                'price' => 150.00,
                'statut' => 'dirty',
                'priority' => 'high',
                'capacity' => 4,
                'image' => 'suite-room.jpg',
                'type_id' => 3,
            ],
            [
                'name' => 'Celia',
                'price' => 120.00,
                'statut' => 'dirty',
                'priority' => 'high',
                'capacity' => 4,
                'image' => 'suite-room.jpg',
                'type_id' => 3,
            ],
        ];
        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
