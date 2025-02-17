<?php

namespace App\Models;
use App\Models\Citizen;
use Illuminate\Database\Eloquent\Model;

class Pasport extends Model
{
    //
    public function citizens(){
        return $this->belongsTo(Citizen::class);
    }
}
