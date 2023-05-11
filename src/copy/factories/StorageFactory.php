<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Storage>
 */
class StorageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'name' => $this->faker->name(),
        'price' => $this->faker->randomDigitNotNull(),
        'count' => $this->faker->randomDigitNotNull(),
        'desc' => 'description',
        'category_id'=> 1,
        'delivery_id' => 1

     ];
    }
}
