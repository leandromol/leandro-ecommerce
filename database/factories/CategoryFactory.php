<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [


            /* 
           'created_at' => $this-> faker-> dateTime($max = 'now', $timezone = null),
           'updated_at' => $this-> faker->dateTime($max = 'now', $timezone = null),
           */

        /*
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => $this->faker->unique()->randomElement(['Deportes', 'Futbol', 'Diversion', 'Accesorios_Deportivos', 'Ciclismo', 'tenis'])

        */

        ];
    }
}
