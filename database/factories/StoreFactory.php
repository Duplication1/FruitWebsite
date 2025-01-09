<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fruit_name' => $this->faker->word,
            'admin_id' => 1,
            'fruit_price' => $this->faker->randomNumber(2),
            'fruit_quantity' => $this->faker->randomNumber(2),
            'fruit_image' => $this->faker->imageUrl(),
            'fruit_description' => $this->faker->sentence,
        ];
    }
}
