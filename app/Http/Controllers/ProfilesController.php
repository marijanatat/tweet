<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('edit',$user);

        //abort_if($user->isNot(auth()->user(),404))
        if(auth()->user()->is($user)){
      return view('profiles.edit',compact('user'));  
    }
    else{
        abort(404);
    }
    }

    public function update(User $user)
    {
      
        $attributes=request()->validate([
            'avatar'=>['file'],
            'username'=>['string','required','max:255',Rule::unique('users')->ignore($user),'alpha_dash'],
            'name'=>['string','required','max:255'],
            'email'=>['string','required','max:255','email',Rule::unique('users')->ignore($user)],
            'password'=>['string','required','min:8','max:255','confirmed']
        ]);

       $attributes['password']=Hash::make(request('password'));
       if(request('avatar')){
       $attributes['avatar']= request('avatar')->store('avatars');
       }
        $user->update($attributes);
        return redirect($user->path());

        
    }
}
