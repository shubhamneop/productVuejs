<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function size(){
        return $this->hasMany('App\ProductSize','product_id');
    }

    public function image(){
        return $this->hasMany('App\ProductImage','product_id');
    }
}
