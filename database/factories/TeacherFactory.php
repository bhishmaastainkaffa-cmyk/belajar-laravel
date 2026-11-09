<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teacher>
 */
class TeacherFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nip' => fake()->unique()->numberBetween(1000000000, 9999999999),
            'subjects' => fake()->randomElement([
                'Matematika',
                'Bahasa Indonesia',
                'Bahasa Inggris',
                'Pemrograman Web',
                'Basis Data',
                'Pendidikan Pancasila',
                'Sejarah',
                'Informatika',
                'Fisika',
                'Kimia',
            ]),
            'start_date' => fake()->date(),
        ];
    }
}
