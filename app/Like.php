<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    protected $guarded=[];
   public function tweet(Type $var = null)
   {
       return $this->belongsTo(Tweer::class);
   }
}
