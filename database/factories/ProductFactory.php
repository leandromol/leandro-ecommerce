<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'name' => 'product'. $this->faker->numberBetween(1,Product::count()),
            'description' => $this->faker->text($maxNbChars = 200),
            'price' => $this->faker->numberBetween($min= 10000, $max = 1000000),
            'available'=> $this->faker->boolean($chanceOfGettingTrue = 50),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),



        ];
    }
}
