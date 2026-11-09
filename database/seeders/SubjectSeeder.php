<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        Subject::factory(10)
            ->has(
                Teacher::factory()->state(
                    fn (array $attributes, Subject $subject) => [
                        'subjects' => $subject->name,
                    ]
                ),
                'teacher'
            )
            ->create();
    }
}
