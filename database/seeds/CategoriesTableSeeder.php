<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Horror',
                'slug' => 'horror',
                'image' => 'horror.png',
                'icon' => NULL,
                'isApproved' => 1,
                'created_at' => '2018-11-19 02:08:10',
                'updated_at' => '2018-11-19 02:08:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Romance',
                'slug' => 'romance',
                'image' => 'romance.png',
                'icon' => NULL,
                'isApproved' => 1,
                'created_at' => '2018-11-19 02:08:11',
                'updated_at' => '2018-11-19 02:08:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Fiction',
                'slug' => 'fiction',
                'image' => 'fiction.png',
                'icon' => NULL,
                'isApproved' => 1,
                'created_at' => '2018-11-19 02:08:11',
                'updated_at' => '2018-11-19 02:08:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Action',
                'slug' => 'action',
                'image' => 'action.png',
                'icon' => NULL,
                'isApproved' => 1,
                'created_at' => '2018-11-19 02:08:11',
                'updated_at' => '2018-11-19 02:08:11',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Humour',
                'slug' => 'humor',
                'image' => 'humor.png',
                'icon' => NULL,
                'isApproved' => 1,
                'created_at' => '2018-11-19 02:08:11',
                'updated_at' => '2018-11-19 02:08:11',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Poetry',
                'slug' => 'poetry',
                'image' => 'poetry.png',
                'icon' => NULL,
                'isApproved' => 1,
                'created_at' => '2018-11-19 02:08:11',
                'updated_at' => '2018-11-19 02:08:11',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Adventure',
                'slug' => 'adventure',
                'image' => 'adventure.png',
                'icon' => NULL,
                'isApproved' => 1,
                'created_at' => '2018-11-19 02:08:12',
                'updated_at' => '2018-11-19 02:08:12',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Spiritual',
                'slug' => 'spiritual',
                'image' => 'spritual.png',
                'icon' => NULL,
                'isApproved' => 1,
                'created_at' => '2018-11-19 02:08:12',
                'updated_at' => '2018-11-19 02:08:12',
            ),
        ));
        
        
    }
}