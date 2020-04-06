<x-master>
<section class="px-8 py-4">      
    <main class="container mx-auto">

        <div class="lg:flex lg:justify-center"> 
           @if(auth()->check())
                
            
  <div class="lg:w-32">
      @include('_sidebar-links')
      @endif

  </div>

  <div class="flex-1 lg:mx-10" style="max-width:700px">
      
   {{$slot}}
  </div>

  
    @if(auth()->check())
    <div class="lg:w-32">      
        @include('_friends-list')
     </div>

     @endif</div>

    </main>
    <section>
    </x-master>

