<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;



class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 50 ; $i++) {
           DB::table('categories')-> insert([

            'name'=>'category'. $i,
            'created_at'=>$faker->dateTime($max = 'now', $timezone = null),
            'updated_at'=>$faker->dateTime($max = 'now', $timezone = null)
            
          
            ]);
   }

}

}
