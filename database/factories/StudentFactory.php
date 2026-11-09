<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nis' => fake()->unique()->randomNumber(5, true),
            'classroom_id' => Classroom::factory(),
            'class' => fake()->randomElement([
                'X RPL 1',
                'X RPL 2',
                'XI RPL 1',
                'XI RPL 2',
                'XII RPL 1',
                'XII RPL 2',
            ]),
            'address' => fake()->address(),
        ];
    }
}
