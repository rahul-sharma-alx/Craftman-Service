<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Craftman>
 */
class CraftmanFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'image' => fake()->imageUrl(),
            'password' => static::$password ??= Hash::make('password'),
            'fee' => fake()->randomDigit(),
            'category' => fake()->randomElement(['plumber', 'electrician', 'carpenter', 'painter', 'mason', 'labour']),
            'experience' => fake()->randomDigit(),
            'pincode' => fake()->postcode(),
            'subdistic' => fake()->city(),
            'distic' => fake()->city(),
            'description' => fake()->text(),
            'status' => fake()->randomElement(['active', 'inactive']),
            'is_verified' => fake()->randomElement(['yes', 'no']),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
