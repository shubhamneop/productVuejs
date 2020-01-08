<?php

use Illuminate\Database\Seeder;

class ProductSizeTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sizes')->delete();
        $productsize = array(
            array('id' => 1,'size' => 'S','price' => '100', 'product_id' => 1 ),
            array('id' => 2,'size' => 'M','price' => '150', 'product_id' => 1 ),
            array('id' => 3,'size' => 'L','price' => '200', 'product_id' => 1 ),
            array('id' => 4,'size' => 'S','price' => '150', 'product_id' => 2 ),
            array('id' => 5,'size' => 'M','price' => '170', 'product_id' => 2 ),
            array('id' => 6,'size' => 'L','price' => '220', 'product_id' => 2 )
            );
            DB::table('product_sizes')->insert($productsize);
    }
}
