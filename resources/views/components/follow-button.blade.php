@if (auth()->user()->isNot($user))
  <!--unless(auth()->user()->is($user))-->

<form action="{{route('follow',$user->username)}}" method="POST">
            @csrf
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white text-xs"> 
               {{auth()->user()->following($user) ?'Unfollow me':'Follow me'}} </button>
            
        </form>
        @endif