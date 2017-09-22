<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
   public function options()
   {
      return $this->belongsTo(Option::class);
   }

   public function schoolYear()
   {
       return $this->belongsTo(SchoolYear::class);
   }
}
