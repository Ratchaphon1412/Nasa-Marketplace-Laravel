<div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-8">
    <div class="flex items-center justify-between pb-6">
      <div>
        <h2 class="font-semibold text-white">User Interest</h2>
        <span class="text-xs text-white">View accounts in ours of registered users</span>
      </div>
      <div class="flex items-center justify-between">
        {{-- <div class="ml-10 space-x-8 lg:ml-40">
          <button class="flex items-center gap-2 rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
            </svg>
  
            Create Team
          </button>
        </div> --}}
      </div>
    </div>
    <div class="overflow-y-hidden rounded-lg ">
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="bg-blue-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
             
              <th class="px-5 py-3">Name</th>
           
              <th class="px-5 py-3">Status</th>
            </tr>
          </thead>
          <tbody class="text-white">
            @if($project->usersInterested->count() > 0)

              @foreach($project->usersInterested as $user)

              <tr>
          
                <td class=" px-5 py-5 text-sm">
                  <div class="flex items-center">
                    <div class="h-10 w-10 flex-shrink-0">
                     
                      <img class="h-full w-full rounded-full" src="{{$user->profile_photo_url}}" alt="" />
                    </div>
                    <div class="ml-3">
                      <p class="whitespace-no-wrap">{{$user->name}}</p>
                    </div>
                  </div>
                </td>
                
    
                <td class="px-5 py-5 text-sm">
                  <span class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Interest</span>
                </td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
      <div class="flex flex-col items-center  px-5 py-5 sm:flex-row sm:justify-between">
        <span class="text-xs text-white sm:text-sm"> Showing 1 to 5 of 12 Entries </span>
        <div class="mt-2 inline-flex sm:mt-0">
          <button class="mr-2 h-12 w-12  text-sm font-semibold text-white transition duration-150 hover:text-blue-600">Prev</button>
          <button class="h-12 w-12 text-sm font-semibold text-white transition duration-150 hover:text-blue-600">Next</button>
        </div>
      </div>
    </div>
  </div>
  