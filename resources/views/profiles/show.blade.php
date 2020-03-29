@extends('layouts.app')

@section('content')
<header mb-6 relative>
    <img src="/png/ban.jpeg"
     style="width: 750px ;height:250px "  
     class="mb-2">
    
    <div class="flex justify-between items-center mb-4">
    <div>
        <h2 class="font-bold text-2xl mb-0">
            {{$user->name}}
        </h2>
         <p class='text-sm'>Joined {{$user->created_at->diffForHumans()}}</p>
    </div>

     <div>
        <a href="" class="  rounded-full border border-gray-300 py-2 px-4 mr-2 text-black text-xs">
        Edit profile</a>
        <a href="" class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white text-xs">
           Follow me</a>

     </div>


    </div>
    <p class="text-sm">My name is Milena</p>
    <img src="https://i.pravatar.cc/200?u={{$user->email}}" 
        alt=""
        class="rounded-full mr-2 absolute" 
        style="width:140px; left:630px;top:35%"
        >
    
  
</header>
<!--<h3>
    Profile page for {{$user->name}}
</h3>-->
<hr>
@include('_timeline',['tweets'=>$user->tweets])
@endsection
