<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetsController extends Controller
{
    public function store()
    {
        request()->validate(['body'=>'required|max:255']);
        
        Tweet::create([
           'user_id'=>auth()->id(),
            'body'=>request('body')
        ]);
        return redirect('/home');
    }
    public function index()
    {
        $tweets=Tweet::latest()->get();
        return view('home',[
            'tweets'=> auth()->user()->timeline()
        ]);
    }
}
