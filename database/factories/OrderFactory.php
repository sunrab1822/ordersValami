<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => random_int(1, 4),
            'name' => $this->faker->name(),
            'price' => random_int(1, 100),
            'quantity' => random_int(1, 10),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
