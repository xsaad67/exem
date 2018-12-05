<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker::create();
        $i=1;
    	foreach (range(1,100) as $index) {
	        \DB::table('posts')->insert([
	            'title' => $faker->sentence(8),
	            'user_id' => rand(1,30),
	            'slug' => 'slug'.$i,
	            'description'=>$faker->text(5000),
	            'category_id' => rand(1,30),
	            'created_at' => date('Y-m-d h:i:s'),
	            'updated_at' => date('Y-m-d h:i:s'),
	        ]);
			$i++;
		}

    }
}
