<?php

namespace Database\Factories;

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
        return [
            'title' => fake()->randomElement(['قهوه', 'ماسالا', 'موکا', 'لته', 'سیگار', 'ادامس']),
            'price' => fake()->numberBetween(100000, 1000000),
            // 'category_id' => Category::all()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
