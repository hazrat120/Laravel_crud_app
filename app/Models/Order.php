<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order_product;

class Order extends Model
{
    //
    public function products(){
        return $this->belongsToMany(Product::class, 'order_product');
    }
}
