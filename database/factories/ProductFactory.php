<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
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
        $category = Category::all();
        $brand = Brand::all();
        return [
            'nama' => fake()->unique()->word(),
            'barcode' => fake()->ean13(),
            "price" => (float)fake()->numberBetween(1000, 1000000),
            'thumbnail' => "thumbnail.png",
            'discount' => fake()->numberBetween(0,90),
            'categories_id' => $category->random()->id,
            'brands_id' => $brand->random()->id,
        ];
    }
}
