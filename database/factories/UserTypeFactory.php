<?php

namespace Database\Factories;
use App\Models\UserType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserType>
 */
class UserTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_type' => 'user',
        ];
    }
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'user_type' => 'admin'
        ]);
    }
   
}
