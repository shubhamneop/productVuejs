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
         $this->call(ProductTabelSeeder::class);
         $this->call(ProductSizeTabelSeeder::class);
         $this->call(ProductImageTabelSeeder::class);

    }
}
