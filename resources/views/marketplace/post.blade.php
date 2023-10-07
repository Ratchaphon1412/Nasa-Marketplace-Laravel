<section class=" py-8 lg:py-16 antialiased">
    @vite(['resources/js/editor-post.js'])
    <div class="max-w-2xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-lg lg:text-2xl font-bold text-white">Discussion</h2>
      </div>
      <form id="post" action="{{route('post',['project'=>$project])}}" method="POST" enctype="multipart/form-data" class="mb-6">
        @csrf
        <div class="mx-auto w-full  mb-6">
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-white">Title</label>
                <input type="text" id="title" name="title" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500   ">
            </div>
            
            <div class="flex flex-col space-y-2 w-full">
                <label for="editorPost" class="font-semibold">Post</label>
                @error('postcontent')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                @enderror
                <input type="hidden" name="postcontent" id="postcontent">
                <div id="editorPost" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-black bg-white"></div>
                   
            </div>
        
        </div>
          <button type="submit"
              class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-600 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              Post comment
          </button>
      </form>

      @if($project->posts->count()>0)
        @foreach ($project->posts as $post)
        
        <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900 m-4">
            <footer class="flex justify-between items-center mb-2">
                <div class="flex items-center">
               
                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                            class="mr-2 w-6 h-6 rounded-full"
                            src="{{$post->owner->profile_photo_url}}"
                            alt="Michael Gough">{{$post->owner->name}}</p>
                    {{-- <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                            title="February 8th, 2022">{{$post->created_at}}</time></p> --}}
                </div>

                @auth
                    @if($post->owner->id == auth()->user()->id)
                    <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        type="button">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                        </svg>
                        <span class="sr-only">Comment settings</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownComment1"
                        class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownMenuIconHorizontalButton">
                
                            <li>
                                <form action="{{route('post.delete',['project'=>$project,'post'=>$post])}}" method="POST" >
                                    @csrf
                                    <button type="submit"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</button>
                                </form>
                     
                            </li>
            
                        </ul>
                    </div>
                    @endif
                @endauth
            </footer>
            <div class="">
                <h1 class="text-black font-bold text-2xl">{{$post->title}}</h1>
            </div>
            <div class=" text-gray-400">{!! \Illuminate\Support\Str::markdown($post->content) !!}</div>
            {{-- <div class="flex items-center mt-4 space-x-4">
                <button type="button"
                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                    <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                    </svg>
                    Reply
                </button>
            </div> --}}
        </article>
        @endforeach

      @endif
      {{-- <article class="p-6 mb-3 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-900">
          <footer class="flex justify-between items-center mb-2">
              <div class="flex items-center">
                  <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                          class="mr-2 w-6 h-6 rounded-full"
                          src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                          alt="Jese Leos">Jese Leos</p>
                  <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-12"
                          title="February 12th, 2022">Feb. 12, 2022</time></p>
              </div>
              <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                  class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                  type="button">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                      <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                  </svg>
                  <span class="sr-only">Comment settings</span>
              </button>
              <!-- Dropdown menu -->
              <div id="dropdownComment2"
                  class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                      aria-labelledby="dropdownMenuIconHorizontalButton">
                      <li>
                          <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                      </li>
                      <li>
                          <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                      </li>
                      <li>
                          <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                      </li>
                  </ul>
              </div>
          </footer>
          <p class="text-gray-500 dark:text-gray-400">Much appreciated! Glad you liked it ☺️</p>
          <div class="flex items-center mt-4 space-x-4">
              <button type="button"
                  class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                  <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                  </svg>                
                  Reply
              </button>
          </div>
      </article> --}}

    </div>
  </section>