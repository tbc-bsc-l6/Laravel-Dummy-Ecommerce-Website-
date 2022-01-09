<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product' => $this->faker->randomElement(['Book', 'Cd', 'Game']),
            'name' => $this->faker->name(),
            'title' => $this->faker->name(),
            'feature' => rand(5,50),
            'price' => rand(1,50),
            'image' => rand(1,9),
        ];
    }
}
