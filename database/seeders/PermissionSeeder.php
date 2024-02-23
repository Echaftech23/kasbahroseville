<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view_tasks',
            'create_tasks',
            'edit_tasks',
            'delete_tasks',

            'view_facilities',
            'create_facilities',
            'edit_facilities',
            'delete_facilities',

            'view_rooms',
            'create_rooms',
            'edit_rooms',
            'delete_rooms',

            'view_roles',
            'create_roles',
            'edit_roles',
            'delete_roles',

            'view_payment_methods',
            'create_payment_methods',
            'edit_payment_methods',
            'delete_payment_methods',

            'view_reviews',
            'create_reviews',
            'edit_reviews',
            'delete_reviews',

            'view_types',
            'create_types',
            'edit_types',
            'delete_types',

            'view_payments',
            'create_payments',
            'edit_payments',
            'delete_payments',

            'view_reservations',
            'create_reservations',
            'edit_reservations',
            'delete_reservations',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
