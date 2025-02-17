<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use App\Models\Catagory;
 use App\Models\Product;

class Client extends Model
{
    //
    public function products(){
        return $this->hasManyThrough( Product::class, Catagory::class);
    }

    public function catagories(){
        return $this->hasMany(Catagory::class);
    }
}
