<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function getProducts(){
        $products= Product::all();
        return $this->products;
    }
}
