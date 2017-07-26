<?php

use Illuminate\Database\Seeder;

//lama a los demas seeders
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //$this->call(UserSeeder::class);
      //$this->call(CategorySeeder::class);
      //$this->call(TagSeeder::class);
      $this->call(ArticleSeeder::class);
    }
}
