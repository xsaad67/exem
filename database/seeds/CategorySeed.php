<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       $array = [
        
            'Horror',
            'Romance',
            'Fiction',
            'Action',
            'humour',
            'Poetry',
            'Adventure',
            'Spiritual',
       ]; 

       foreach($array as $category){

            $cat = new Category();
            $cat->name  = $category;
            $cat->save();
       }
    	
    }

}
