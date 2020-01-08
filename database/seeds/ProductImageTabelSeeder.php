<?php

use Illuminate\Database\Seeder;

class ProductImageTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->delete();
        $productsize = array(
            array('id' => 1,'product_image' => 'product/1567150622-product.jpeg', 'product_id' => 1 ),
            array('id' => 2,'product_image' => 'product/1567150682-product.jpeg', 'product_id' => 1 ),
            array('id' => 3,'product_image' => 'product/1567150972-product.jpeg', 'product_id' => 1 ),
            array('id' => 4,'product_image' => 'product/phpixGH5I.jpeg', 'product_id' => 2 ),
            array('id' => 5,'product_image' => 'product/phpixGH5I.jpeg', 'product_id' => 2 ),
            array('id' => 6,'product_image' => 'product/1566904068-product.png', 'product_id' => 2 )
            );
            DB::table('product_images')->insert($productsize);
    }
}
