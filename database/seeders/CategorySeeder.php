<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            array([ 'name' => 'men' , 'slug' => 'men' , 'status' => '0' , ]),
            array([ 'name' => 'women' , 'slug' => 'women' , 'status' => '0' , ]),
            array([ 'name' => 'kids' , 'slug' => 'kids' , 'status' => '0' , ]),
            array([ 'name' => 'accessories' , 'slug' => 'accessories' , 'status' => '0' , ])
        ]);
    }
}
