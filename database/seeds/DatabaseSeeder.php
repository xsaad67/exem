<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         PostSeed::class,
         CategorySeed::class,
         UserSeed::class,
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }   
}
