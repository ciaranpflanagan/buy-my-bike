<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {

    	$faker = Faker::create();

        for ($i=0; $i < 10; $i++) { 
	        DB::table('products')->insert([
	            'title' => $faker->sentence,
	            'slug' => Str::random(5),
	            'image' => "img/background-image.jpg",
	            'description' => $faker->paragraph(2)
	        ]);
        }
    }
}
