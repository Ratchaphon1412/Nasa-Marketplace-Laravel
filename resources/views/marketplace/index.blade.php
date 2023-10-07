<x-guest-layout>

    @include('pages.search-section')


        {{-- <x-search-sticky /> --}}
        

   <x-layouts.sidebar-category >
    <div class="flex md:flex-row flex-col  flex-wrap justify-around items-center  overflow-hidden">
        @foreach ($projects as $project)
            <x-card-opensource :project="$project" />
        @endforeach

   
  
  
    </div>
   </x-layouts.sidebar-category>
    

</x-guest-layout>