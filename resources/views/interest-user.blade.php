<x-app-layout>
   


    
    <div class="h-96 p-12 bg-fixed  flex justify-center items-center bg-cover bg-no-repeat"
    style="background-image:url('https://images.unsplash.com/photo-1630839437035-dac17da580d0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2030&q=80');"
    >
      
    </div>

   <x-container>
    <div class="m-8">
        <div class="w-full flex flex-row justify-between">
          <h1 class="text-3xl font-bold text-white">Your Interest Project</h1>

         
        </div>
          <div class="flex md:flex-row flex-col flex-wrap justify-around gap-4">
            
            @foreach ($projects as $project )
                <x-card-opensource :project="$project"/>
          
            @endforeach
          </div>
      </div>
   </x-container>


</x-app-layout>
