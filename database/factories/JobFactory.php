<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'job_title' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'job_type' => $this->faker->words(3, true),
            'num_applications' => rand(1, 100),
            'deadline' => $this->faker->dateTime(),
            'location' => $this->faker->country(),
            'salary' => rand(0, 100000),
            'description' => $this->faker->paragraph(2, true),
        ];
    }
}