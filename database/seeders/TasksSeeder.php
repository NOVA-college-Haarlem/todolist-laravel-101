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
                'completed' => false,
                'due_date' => '2025-11-11',
            ],
            [
                'title' => 'Task 2',
                'description' => 'Description 2',
                'completed' => false,
                'due_date' => '2025-11-12',
            ],
            [
                'title' => 'Task 3',
                'description' => 'Description 3',
                'completed' => false,
                'due_date' => '2025-11-13',
            ],
            [
                'title' => 'Task 4',
                'description' => 'Description 4',
                'completed' => false,
                'due_date' => '2025-11-14',
            ],
        ];

        Task::insert($tasks);

    }
}
