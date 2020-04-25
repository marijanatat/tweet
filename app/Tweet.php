<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;
use App\User;
use App\Likeble;

class Tweet extends Model
{
    use Likeble;

    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

   

}
