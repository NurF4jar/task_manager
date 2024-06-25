<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Nur Fajar',
            'email' => 'nurfajar@example.com',
            'password' => bcrypt('1233.321A'),
            'email_verified_at' => time()
        ]);

        Project::factory()
            ->count(50)
            ->hasTasks(50)
            ->create();
    }
}
