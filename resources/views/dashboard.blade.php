<x-app-layout>
   


    
    <div class="h-96 p-12 bg-fixed  flex justify-center items-center bg-cover bg-no-repeat"
    style="background-image:url('https://images.unsplash.com/photo-1630839437035-dac17da580d0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2030&q=80');"
    >
      
    </div>

   <x-container>
        <div class="flex md:flex-row flex-col flex-wrap justify-around gap-4">
            <div class="m-8 p-8 w-full">
                <h1 class="text-white font-black text-xl mb-6">My Project</h1>
                <div class="border border-dashed group bg-gray-900/30 py-20 h-full  px-4 flex flex-col space-y-2 items-center  justify-center cursor-pointer rounded-md hover:bg-gray-900/40 hover:smooth-hover">
                    <a href="/marketplace/create" class=" text-white/50 group-hover:text-white group-hover:smooth-hover flex w-20 h-20 rounded-full items-center justify-center" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
                    </a>
                    <a href="/marketplace/create" class="text-white/50 group-hover:text-white group-hover:smooth-hover text-center">
                      Create Project
                    </a>
                
                  </div>
            </div>
        @foreach ($projects as $project )
            <x-card-opensource :project="$project"/>
      
        @endforeach
        </div>
    
   </x-container>
  





</x-app-layout>
