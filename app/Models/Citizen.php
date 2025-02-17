<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pasport;

class Citizen extends Model
{
    //
    public function pasports(){
        return $this->hasOne(Pasport::class);
    }
}
