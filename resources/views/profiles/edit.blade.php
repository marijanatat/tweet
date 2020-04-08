<x-app>
<form action="{{$user->path()}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      <div class="mb-6">
        <label for="name" class="block mb-2 uppercase font-bold text-xs text-green-700">Name</label>

    
            <input id="name" type="text" 
            class="border border-gray-400 p-2 w-full"
            
          value="{{$user->name}}"
            name="name"  required >

            @error('name')
               
                  <p class="text-red-500 text-xs mt-2">
                      {{ $message }}
                  </p>
            
            @enderror
        </div>
    

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-green-700">Username</label>
    
            
                <input id="username" type="text" 
                class="border border-gray-400 p-2 w-full"
                 name="username"  
                 value="{{$user->username}}"
                 required >
              
                @error('username')
                   
                      <p class="text-red-500 text-xs mt-2">
                          {{ $message }}
                      </p>
                
                @enderror
            </div>

            <div class="mb-6">           
                    <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-green-700">Avatar</label>        
                    <div class="flex">
                        <input id="avatar" type="file" 
                        class="border border-gray-400 p-2 w-full"
                         name="avatar"                   
                          >

                     <img src="/storage/{{$user->avatar}}" alt="your avatar" width="40">

                    </div>
                 
                        @error('avatar')
                           
                              <p class="text-red-500 text-xs mt-2">
                                  {{ $message }}
                              </p>
                        
                        @enderror
               
            
                </div>

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-green-700">Email</label>
        
                
                    <input id="email" type="email" 
                    class="border border-gray-400 p-2 w-full"
                     name="email" 
                 value="{{$user->email}}" required >
        
                    @error('email')
                       
                          <p class="text-red-500 text-xs mt-2">
                              {{ $message }}
                          </p>
                    
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-green-700">Password</label>
            
                    
                        <input id="password" type="password" 
                        class="border border-gray-400 p-2 w-full" name="password"  required >
            
                        @error('password')
                           
                              <p class="text-red-500 text-xs mt-2">
                                  {{ $message }}
                              </p>
                        
                        @enderror
                    </div>
            
                    <div class="mb-6">
                        <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-green-700">Password cofirmation</label>
                
               <input id="password_confirmation" type="password" 
                            class="border border-gray-400 p-2 w-full" name="password_confirmation"  required >
                
                            @error('password_confirmation')
                               
                                  <p class="text-red-500 text-xs mt-2">
                                      {{ $message }}
                                  </p>
                            
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit"
                                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                            >
                                Submit
                            </button>
                        </div>
        


  </form>
</x-app>