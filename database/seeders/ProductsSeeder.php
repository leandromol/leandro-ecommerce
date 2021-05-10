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
            'available' => 1,
            'score' => 5,
            'stock' => 120,
            'video' => 'https://www.youtube.com/embed/n7jciXt9gnI',
            'discount' => 10
            
        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Espinilleras predator 20 Adidas',
            'description' => 'Espinillera Predator 20 para hombre, 95 % polipropileno, 
            5 % TPU moldeado por inyección. Placa protectora resistente y semirígida.',
            'price' => 49500,
            'available' => 1,
            'score' => 4,
            'stock' => 80,
            'video' => 'https://www.youtube.com/embed/oJoGMxTZ84s',
            'discount' => 5
            
        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Bicicleta Todo Terreno Gw Scorpion',
            'description' => 'TuBici Bike Shop trae para ti TuBici GW SCORPION RIN 29 7 VEL. FRENO DISCO MECÁNICO. SUSPENSIÓN DE REBOTE.
             TuBici trae para ti la nueva Gw SCORPION Rin 29"',
            'price' => 890000,
            'available' => 1,
            'score' => 5,
            'stock' => 40,
            'video' => 'https://www.youtube.com/embed/VfxoykaOl08',
            'discount' => 20

        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Raqueta Tenis Profesional Wilson',
            'description' => 'La Marca Nº 1 de Tenis en el Mundo.
             son diseñados cuidadosamente para lograr características devanguardia que potencian y complementan las habilidades de sus usuarios.',
            'price' => 850000,
            'available' => 1,
            'score' => 5,
            'stock' => 30,
            'video' => 'https://www.youtube.com/embed/tMZmLlu-sXI',
            'discount' => 18


        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'BOTILO O TERMO NIKE ',
            'description' => 'La botella Nike Big Mouth está elaborada con clasificación Polietileno de baja densidad (LDPE). • La válvula proporciona un flujo rápido de líquido evitando fugas',
            'price' => 35000,
            'available' => 1,
            'score' => 3,
            'stock' => 150,
            'video' => 'https://www.youtube.com/embed/NGicPavdwlc',
            'discount' => 5

        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Casco Bicicleta MTB All Ride Cairbull',
            'description' => 'Casco Bicicleta MTB All Ride Cairbull CB-12 Negro.
            Ideal Para Ciclismo de Montaña en Cualquier Terreno: Enduro, Cross Country, MTB, DownHill',
            'price' => 170000,
            'available' => 1,
            'score' => 4,
            'stock' => 65,
            'video' => 'https://www.youtube.com/embed/kzDR7ox44Bk',
            'discount' => 12
            
        ]);


        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Guayos Nike Hypervenom Phantom',
            'description' => 'La parte superior está elaborada en cuero sintético texturizada mejorando el contacto con el balón y la durabilidad. • Ofrece un mejor control del balón',
            'price' => 260000,
            'available' => 1,
            'score' => 5,
            'stock' => 32,
            'video' => 'https://www.youtube.com/embed/VLsGPKhv8iM',
            'discount' => 15
            
        ]);

        DB::table('products')->insert([

            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Bolso De Tenis Raquetero Wilson',
            'description' => 'Excelente distribución:El compartimento primario tiene capacidad parahasta 3 raquetas para adultos, equipos más grandes y prendas de vestir.',
            'price' => 140000,
            'available' => 1,
            'score' => 2,
            'stock' => 25,
            'video' => 'https://www.youtube.com/embed/Jqae_FRJt-8',
            'discount' => 10
            
        ]);
    }
}

