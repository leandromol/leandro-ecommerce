<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddInformationOnProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
     
            'score' => 5,
            'stock' => 120,
            'video' => 'https://www.youtube.com/watch?v=n7jciXt9gnI',
            'discount' => 10

        ]);

        DB::table('products')->insert([
           
            'score' => 4,
            'stock' => 80,
            'video' => 'https://www.youtube.com/watch?v=oJoGMxTZ84s',
            'discount' => 5

        ]);

        DB::table('products')->insert([
            
            'score' => 5,
            'stock' => 40,
            'video' => 'https://www.youtube.com/watch?v=VfxoykaOl08',
            'discount' => 20

        ]);

        DB::table('products')->insert([
            
            'score' => 5,
            'stock' => 30,
            'video' => 'https://www.youtube.com/watch?v=tMZmLlu-sXI',
            'discount' => 18

        ]);

        DB::table('products')->insert([
            
            'score' => 3,
            'stock' => 150,
            'video' => 'https://www.youtube.com/watch?v=NGicPavdwlc&t=63s',
            'discount' => 5

        ]);

        DB::table('products')->insert([
           
            'score' => 4,
            'stock' => 65,
            'video' => 'https://www.youtube.com/watch?v=kzDR7ox44Bk',
            'discount' => 12

        ]);


    }
}
