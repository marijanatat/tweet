<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowsController extends Controller
{
    public function store(User $user)
    {
       //duzi nacin -nije dobar - bolji nacin je toggle method u trait-u
        /*if(auth()->user->folowing($user)){
            auth()->user->unfollow($user);
        }else{
            auth()->user()->follow($user);
        }*/
        auth()->user()->toggleFollow($user);
        return back();
    }
}
