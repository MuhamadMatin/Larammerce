<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->sentence(2);
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'desk' => $this->faker->paragraph(100),
            'image' => $this->faker->imageUrl(),
            'city' => $this->faker->city(),
            'user_id' => User::pluck('id')->random(),
        ];
    }
}
