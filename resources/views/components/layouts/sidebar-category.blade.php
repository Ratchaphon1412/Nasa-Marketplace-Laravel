

<div class="flex w-full mx-auto px-4">
 
    <div>
        
       

<aside class="w-full p-6 sm:w-60  text-gray-100">
	
	<nav class="space-y-8 text-sm">

        @foreach ($categories as $category )
        <div class="space-y-2">
			<h2 class="text-sm font-semibold tracki uppercase text-gray-400">{{$category->name}}</h2>
			<div class="flex flex-col space-y-1">
				@foreach ($category->subCategories as $subCategory )
                <a rel="noopener noreferrer" href="#">{{$subCategory->name}}</a>
                    
                @endforeach
				
			</div>
		</div>
            
        @endforeach
		

	</nav>
</aside>
        
        
    </div>

    <div class="mt-4 mb-4">
        {{$slot}}
    </div>
</div>