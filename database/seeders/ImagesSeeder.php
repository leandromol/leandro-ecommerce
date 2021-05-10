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
            
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_866826-MCO32074641889_092019-O.jpg',
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_883025-MCO40597504295_012020-O.jpg',
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
            
            'url' => 'https://i.linio.com/p/aa32d81370693fe7e504516c394eeb90-catalog.jpg',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_805121-MLM26631564324_012018-O.jpg',
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

        DB::table('images')->insert([
            
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_953607-MCO31557179910_072019-O.jpg',
            'product_id' => 7,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://http2.mlstatic.com/D_NQ_NP_846721-MCO40835294576_022020-W.jpg',
            'product_id' => 8,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        DB::table('images')->insert([
            
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/715Jw9bpN3L._AC_UX466_.jpg',
            'product_id' => 8,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);

        




    }
}

