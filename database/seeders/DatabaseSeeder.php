<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ImageProduct;
use App\Models\Manage;
use App\Models\Product;
use App\Models\RiviewProduct;
use App\Models\SavedProductUser;
use App\Models\Shop;
use App\Models\Thumbnail;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        User::factory(150)->create();
        Manage::factory(1)->create();
        Thumbnail::factory(5)->create();
        Category::factory(10)->create();
        Shop::factory(50)->create();
        Product::factory(5000)->create();
        ImageProduct::factory(10000)->create();
        RiviewProduct::factory(10000)->create();
        SavedProductUser::factory(5000)->create();
    }
}
