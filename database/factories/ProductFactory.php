<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'description' => $this->faker->sentence(15, true),
            'item_number' => $this->faker->randomNumber(6, true),
            // Use lorem picsum instead of the defunct url generator
            'image' => 'https://picsum.photos/200/200?random=' . $this->faker->uuid,
        ];
    }
}
