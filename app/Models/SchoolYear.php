<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    public function registtrionY()
    {
        return $this->hasMany(Registration::class);
    }
}
