<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Option extends Model
{

    public function registration()
    {
       return $this->hasMany(Registration::class);
    }
    
}
