<?php

namespace Database\Seeders;

use App\Models\ProductHasCategory;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class Products_has_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
      ProductHasCategory:: factory(50)->create();

        }
    }

