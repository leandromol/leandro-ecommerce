<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Image;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // image::factory(50)->create();

        $faker = Faker::create();

        DB::table('images')->insert([

            'url' => 'https://http2.mlstatic.com/D_NQ_NP_795553-MCO45335589885_032021-O.jpg',
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_738394-MCO45335614635_032021-O.jpg',
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto:sensitive,fl_lossy/bf4e7e4ba9924c65a30aab1200efe237_9366/Canilleras_Predator_20_League_(UNISEX)_Negro_FM2408_01_standard.jpg',
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://dlse75o8lnzxr.cloudfront.net/media/catalog/product/cache/1/image/1000x/9df78eab33525d08d6e5fb8d27136e95/a/d/adidas-espinilleras-387-1.jpg',
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_881393-MCO41707139241_052020-O.jpg',
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://tubici.com/wp-content/uploads/2020/09/bicicleta-gw-scorpion-negro-verde-casco-gw-luces-recargables.jpg',
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNSihZiCjX8uWdS63m0dz2YdA4QFO7usBOrQ&usqp=CAU',
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);


        DB::table('images')->insert([
            
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_792020-MLA40529060784_012020-O.jpg',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa2qT5Q7QgEJbO5CEjZfp_s3KVNGNNmZu3rHmYZb3c2qBZMIU5llUV4kS5N5qij5MADZI&usqp=CAU',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_631236-MCO31547446172_072019-O.jpg',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://i.linio.com/p/b06f090ce9cf83905a19c27113b6ffe5-product.jpg',
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://exitocol.vtexassets.com/arquivos/ids/459045/termo-nike-big-mouth-blanco.jpg?v=637010776838830000',
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/61mHzO0CSfL._AC_SY450_.jpg',
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://i.linio.com/p/bcbdba816964246fb07b9c08d9844d73-product.jpg',
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);


    }
}

