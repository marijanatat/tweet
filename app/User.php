<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Tweet;
use App\Followable;

class User extends Authenticatable
{
    use Notifiable,Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
  public function setPasswordAttribute($value)
  {
      $this->attributes['password']=bcrypt($value);
  }
    public function timeline()
    {
    // return Tweet::where('user_id',$this->id)->latest()->get();
      $friends= $this->follows()->pluck('id');
     
      return Tweet::whereIn('user_id',$friends)
      ->orWhere('user_id',$this->id)
      ->latest()->get();


    }

    public function tweets()
    {
       return $this->hasMany(Tweet::class)->latest();
    }
    /*public function getAvatarAttribute($value)
    {
        return asset($value);
        //return "https://i.pravatar.cc/40?u=" .$this->email; 
    }*/

    
// u Laravel 6 ako ruta pretrazuje nesto sto nije primary key- na primer pretrazuje po imenu
//Route::get('/profiles/{user}
   // public function getRouteKeyName()
   //{
     //  return  'name';
    //}
   //od Laravela 7 kada se deklarise wildcard {user:name}

   public function path($append = '')
    {
        //$path = route('profile', $this->name);
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }


}


