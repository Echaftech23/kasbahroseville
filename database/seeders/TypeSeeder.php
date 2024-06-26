<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Single', 'Double', 'Suite'];

        foreach ($types as $type) {
            Type::create(['type' => $type]);
        }
    }

}
