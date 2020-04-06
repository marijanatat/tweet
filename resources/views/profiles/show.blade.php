<x-app>
<header mb-6 relative>
    <div class="relative">
        <img src="/png/ban.jpeg"
         style="width: 750px ;height:250px "  
         class="mb-2">
    
         <img src="https://i.pravatar.cc/200?u={{$user->email}}" 
            alt=""
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" 
            style="left: 50%"
         
            >
    </div>
    
    <div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="font-bold text-2xl mb-0">
            {{$user->name}}
        </h2>
         <p class='text-sm'>Joined {{$user->created_at->diffForHumans()}}</p>
    </div>


     <div class="flex">
        <!-- @if(auth()->user()->is($user))-- uradjeno policy sa metodom edit, uradjena autorizacija sa middlewearom na ruti
            tako da je ovo nepotrbno moguce sa Can-->

        @can('uedit', $user)
            <a href="/profiles/{{$user->name}}/edit" 
            class="rounded-full border border-gray-300 py-2 px-4 mr-2 text-black text-xs">
             Edit profile
              </a>
        @endcan

        <x-follow-button :user="$user">
        </x-follow-button>

     </div>

    </div>
    <p class="text-sm">My name is Milena</p>
    
    
  
</header>
<!--<h3>
    Profile page for {{$user->name}}
</h3>-->
<hr>
@include('_timeline',['tweets'=>$user->tweets])
</x-app>
