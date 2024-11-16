<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Shop;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'desk' => $this->faker->paragraph(40),
            'thumnail' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(1000, 1000000),
            'category_id' => Category::pluck('id')->random(),
            'shop_id' => Shop::pluck('id')->random(),
        ];
    }
}
