
<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse (auth()->user()->follows as $user)
    <li class="{{$loop->last?'':'mb-4'}}">
                <div class="">
                    <a href="{{route('profile',$user->username)}}" class="flex items-center tx-sm">
                    <img src="https://i.pravatar.cc/40?u={{$user->email}}" 
                    alt=""
                    class="rounded-full mr-2"
                    >
                    {{$user->username}}
                    </a>
                    </div>
                
            </li>
            @empty
            <li>No friends yet</li>
                
            
        @endforelse
        
        
    </ul>
</div>