<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->autorize('edit',$user);

        //abort_if($user->isNot(auth()->user(),404))
        if(auth()->user()->is($user)){
      return view('profiles.edit',compact('user'));  
    }
    else{
        abort(404);
    }
    }
}
