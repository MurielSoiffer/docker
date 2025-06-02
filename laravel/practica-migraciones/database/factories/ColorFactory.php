<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Color>
 */
class ColorFactory extends Factory
{
    protected $model = \App\Models\Color::class;
     protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     
     */
    public function definition(): array
    {
        return [
            'color' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ];
    }
}
