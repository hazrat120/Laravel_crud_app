<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Student extends Model
{
    //
    public function contact(){
        return $this->hasOne(Contact::class);

    }
}
