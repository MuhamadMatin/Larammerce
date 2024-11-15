<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiviewProduct>
 */
class RiviewProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'star' => $this->faker->numberBetween(1, 5),
            'body' => $this->faker->paragraph(50),
            'user_id' => User::pluck('id')->random(),
            'product_id' => Product::pluck('id')->random(),
        ];
    }
}
