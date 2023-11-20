<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genero = $this->faker->randomElement(['masculino', 'femenino']);

        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'cedula' => $this->faker->unique()->randomNumber(8),
            'password' => bcrypt('mamalucas2000'),
            'status' => 3,
            'genero' => $genero,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $user->assignRole('Estudiante');
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
