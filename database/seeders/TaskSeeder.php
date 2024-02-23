<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'name' => 'Clean Room Arinas',
                'description' => 'Thoroughly clean and sanitize Room Arinas.',
                'statut' => 'todo',
                'user_id' => 1, // Replace with the actual user ID
            ],
            [
                'name' => 'Replace Bed Linens',
                'description' => 'Replace the bed linens in all rooms.',
                'statut' => 'in-progress',
                'user_id' => 2, // Replace with the actual user ID
            ],
            [
                'name' => 'Inspect Common Areas',
                'description' => 'Inspect and clean common areas such as the lobby and hallways.',
                'statut' => 'completed',
                'user_id' => 3, // Replace with the actual user ID
            ],
            [
                'name' => 'Vacuum and Mop Floors',
                'description' => 'Vacuum and mop the floors in all rooms and common areas.',
                'statut' => 'in-progress',
                'user_id' => 1, // Replace with the actual user ID
            ],
            [
                'name' => 'Empty Trash Bins',
                'description' => 'Empty trash bins in each room and replace with fresh liners.',
                'statut' => 'todo',
                'user_id' => 2, // Replace with the actual user ID
            ],
            [
                'name' => 'Dust and Wipe Surfaces',
                'description' => 'Dust and wipe down surfaces such as furniture, countertops, and fixtures.',
                'statut' => 'completed',
                'user_id' => 3, // Replace with the actual user ID
            ],
            [
                'name' => 'Restock Toiletries',
                'description' => 'Check and restock toiletries in each room.',
                'statut' => 'todo',
                'user_id' => 1, // Replace with the actual user ID
            ],
            [
                'name' => 'Replace Light Bulbs',
                'description' => 'Inspect and replace any burnt-out light bulbs in rooms and hallways.',
                'statut' => 'in-progress',
                'user_id' => 2, // Replace with the actual user ID
            ],
        ];

        foreach ($tasks as $tasks) {
            Task::create($tasks);
        }
    }
}
