<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'product_code' => $this->faker->regexify('[1-9]{4}'),
            'product_name' => $this->faker->word(),
            'stock' => $this->faker->randomNumber(5, true),
            'price' => $this->faker->randomNumber(5, true),
            'image' => $this->faker->randomElement([
                'product_image/rabbani.jpg',
                'product_image/Elzatta.png',
                'product_image/zoya.png'
            ]),
            'merk' => $this->faker->randomElement(['Rabbani', 'Elzatta', 'Zoya']),
            'description' => $this->faker->paragraph()
        ];
    }
}
