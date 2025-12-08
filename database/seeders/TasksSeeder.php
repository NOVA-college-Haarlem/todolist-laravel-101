<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Task 1',
                'description' => 'Description 1',
                'is_completed' => false,
                'due_date' => '2025-11-11',
                'user_id' => 1,
                'category_id' => 1,

            ],
            [
                'title' => 'Task 2',
                'description' => 'Description 2',
                'is_completed' => false,
                'due_date' => '2025-11-12',
                'user_id' => 1,
                'category_id' => 1,
            ],
            [
                'title' => 'Task 3',
                'description' => 'Description 3',
                'is_completed' => false,
                'due_date' => '2025-11-13',
                'user_id' => 1,
                'category_id' => 1,
            ],
            [
                'title' => 'Task 4',
                'description' => 'Description 4',
                'is_completed' => false,
                'due_date' => '2025-11-14',
                'user_id' => 1,
                'category_id' => 1,
            ],
        ];

        Task::insert($tasks);

    }
}
