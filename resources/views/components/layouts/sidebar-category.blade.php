

<div class="flex w-full mx-auto px-4">
 
    <div>
        
       

<aside class="w-full p-6 sm:w-60  text-gray-100">
	
	<nav class="space-y-8 text-sm">

        @foreach ($categories as $category )
        <div class="space-y-2">
			<a href="/marketplace" class="text-sm font-semibold tracki uppercase text-gray-400">{{$category->name}}</a>
			<div class="flex flex-col space-y-1">
				@foreach ($category->subCategories as $subCategory )
                <a rel="noopener noreferrer" href="{{route('marketplace',['subCategory'=>$subCategory->id,'category'=>$category->id])}}"  >{{$subCategory->name}}</a>
                    
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