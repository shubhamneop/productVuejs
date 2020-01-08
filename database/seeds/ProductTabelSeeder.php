<?php

use Illuminate\Database\Seeder;

class ProductTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $product = array(
            array('id' => 1,'name' => 'Honor','discription' => 'Honor Mobile price list gives price in India of all Honor mobile phones, including latest Honor phones, best phones under 10000','qty' => 10 ),
            array('id' => 2,'name' => 'Mico tops','discription' => 'Western Wear. Shirts, Tops & Tunics. Tops. From tank tops, crop tops to off-shoulders tops, our selection of tops boasts of designs that everyone is raving about. Our super helpful filters for casual, formal & party tops will ensure you shop quicker.','qty' => 10),
            );
            DB::table('products')->insert($product);
    }
}
