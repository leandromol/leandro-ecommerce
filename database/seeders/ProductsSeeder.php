<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Factories\ProductFactory;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory(50)->create();



        $faker = Faker::create();

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Balón De Fútbol Golty Tradicional 5  ',
            'description' => 'Este balón cumple con los estándares necesarios para llevar a cabo un partido profesional, 
            tiene total esfericidad, es suave al toque para ser preciso en los pases',
            'price' => 105000,
            'available' => 1
            
        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Espinilleras predator 20 Adidas',
            'description' => 'Espinillera Predator 20 para hombre, 95 % polipropileno, 
            5 % TPU moldeado por inyección. Placa protectora resistente y semirígida.',
            'price' => 49500,
            'available' => 1
            
        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Bicicleta Todo Terreno Gw Scorpion',
            'description' => 'TuBici Bike Shop trae para ti TuBici GW SCORPION RIN 29 7 VEL. FRENO DISCO MECÁNICO. SUSPENSIÓN DE REBOTE.
             TuBici trae para ti la nueva Gw SCORPION Rin 29"',
            'price' => 890000,
            'available' => 1
        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Raqueta Tenis Profesional Wilson',
            'description' => 'La Marca Nº 1 de Tenis en el Mundo.
             son diseñados cuidadosamente para lograr características devanguardia que potencian y complementan las habilidades de sus usuarios.',
            'price' => 850000,
            'available' => 1
        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'BOTILO O TERMO NIKE ',
            'description' => 'La botella Nike Big Mouth está elaborada con clasificación Polietileno de baja densidad (LDPE). • La válvula proporciona un flujo rápido de líquido evitando fugas',
            'price' => 35000,
            'available' => 1
        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Casco Bicicleta MTB All Ride Cairbull',
            'description' => 'Casco Bicicleta MTB All Ride Cairbull CB-12 Negro.
            Ideal Para Ciclismo de Montaña en Cualquier Terreno: Enduro, Cross Country, MTB, DownHill',
            'price' => 170000,
            'available' => 1
            
        ]);
    }
}
