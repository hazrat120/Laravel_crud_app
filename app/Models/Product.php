<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    //
    public function orders(){
        return $this->belongsToMany(Order::class, 'order_product');
    }
}
