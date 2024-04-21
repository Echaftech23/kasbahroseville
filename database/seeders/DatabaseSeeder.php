<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            TypeSeeder::class,
            FacilitySeeder::class,
            RoomSeeder::class,
            ReservationSeeder::class,
            PaymentSeeder::class,
            PaymentMethodeSeeder::class,
        ]);
    }
}
