<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
use App\Models\Tag;
use App\Models\TaskTag;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Massan',
            'email' => 'test@test.com',            
        ]);

        $deadline = Carbon::createFromFormat('Y-m-d', '2024-12-31')->format('Y-m-d');
        Task::factory()->create([
            'title' => 'Task1',
            'content' => 'Content1',
            'priority' => '高',
            'severity' => '高',
            'progress' => '未着手',
            'deadline' => $deadline,
            'user_id' => 1,
        ]);

        Tag::factory()->create([
            'tag_name' => '個人開発',
            'user_id' => 1,
        ]);

        TaskTag::factory()->create([
            'task_id' => 1,
            'tag_id' => 1,
        ]);
    }
}
