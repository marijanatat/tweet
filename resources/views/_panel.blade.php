<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
              <form action="/tweets" method="post">
                @csrf
                  <textarea name="body"
                   class="w-full" 
                   placeholder="what's up"
                   required></textarea>
                  <hr my-4>          
                  <footer class="flex justify-between p-4">
                  <img src="https://i.pravatar.cc/40?u={{auth()->user()->email}}"
                    alt="your avatar"
                    class="rounded-full mr-2"
                    width:="50"; heigh="50";
                    >
                    <button type="submit" 
                    class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">
                    Tweet!
                  </button>
                  </footer>
                 
            </form>
            @error('body')
          <p class='rext-red-500 text-sm mt-2'>{{$message}}</p>
            @enderror
          </div>