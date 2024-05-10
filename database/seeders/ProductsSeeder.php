<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' => $faker->words(3, true),
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 10, 100),
                'image_url' => $faker->imageUrl(rand(400, 690), 400, 'products', true),
            ]);
        }
    }
}
