<x-app-layout>
   


    
    <div class="h-96 p-12 bg-fixed  flex justify-center items-center bg-cover bg-no-repeat"
    style="background-image:url('https://images.unsplash.com/photo-1630839437035-dac17da580d0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2030&q=80');"
    >
      
    </div>

   <x-container>
    <div class="m-8">
        <div class="w-full flex flex-row justify-between">
          <h1 class="text-3xl font-bold text-white">My Project</h1>

          <a
          
          href="/marketplace/create"
          class="inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-green-400 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
          Create You Project
          </a>
        </div>
          <div class="flex md:flex-row flex-col flex-wrap justify-around gap-4">
            
            @foreach ($projects as $project )
                <x-card-opensource :project="$project"/>
          
            @endforeach
          </div>
      </div>
   </x-container>
  





</x-app-layout>
