<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ClassroomSeeder::class,
            StudentSeeder::class,
            SubjectSeeder::class,
            TeacherSeeder::class,
        ]);
    }
}
