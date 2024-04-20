<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            'Unlimited Wifi',
            'Air Conditioning',
            'Cable TV',
            'Restaurant quality',
            'PRIVATE TERACCE',
            'SHOWER',
            'HAIR DRYER',
            'BALCONY'
        ];

        foreach ($facilities as $facility) {
            Facility::create(['name' => $facility]);
        }
    }
}
