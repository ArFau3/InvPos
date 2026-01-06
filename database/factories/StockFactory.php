<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $produk = Product::all();
        return [
            'products_id' => $produk->random()->id,
            'amount' => fake()->numberBetween(1,1000),
            "cost" => (float)fake()->numberBetween(100000, 100000000),
            'last_order'=>fake()->dateTime(),
            'last_restock'=>fake()->dateTime(),
            'min_stock' => fake()->numberBetween(0,1000),
            'reason_adjust_min' => fake()->sentence(),
            "sales" => (float)fake()->numberBetween(0, 5000000),
        ];
    }
}
