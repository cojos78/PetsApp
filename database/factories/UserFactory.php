<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $birth = $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('d/m/Y');
        $gender = $this->faker->randomElement(['male', 'female']);
        $photoPath = $this->faker->image('public/img', 400, 300, null, false);
        return [
            'document' => fake()->randomNumber(9, true),
            'fullname' => fake()->firstName($gender) . " " .fake()->lastName(),
            'gender' => $gender,
            'birth' => $birth,
            'photo' => 'imagen/' . basename($photoPath),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('12345'),
            'remember_token' => Str::random(10),
        ];
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