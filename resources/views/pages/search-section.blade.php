<!-- component -->
<!-- Creacte By Joker Banny -->
<div class="h-full p-12 bg-fixed  flex justify-center items-center bg-cover bg-no-repeat"
style="background-image:url('http://localhost/assets/images/space-background-final.svg');"
>
	<div class="container mx-auto bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-lg mt-16 p-14">
		<form>
			<h1 class="text-center font-bold text-white text-4xl">Find the Open Source Project</label>
				<p class="mx-auto font-normal text-sm my-6 max-w-lg">Enter your select domain name and choose any
					extension name in the next step (choose between .com, .online, .tech, .site, .net, and more)</p>
				<div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
					<input class="text-base text-gray-400 flex-grow outline-none px-2 rounded" name="search" type="text" placeholder="Search Open Source" value="{{ request('search') }}" />
					<div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
	
						<button class="bg-indigo-500 text-white text-base rounded-lg px-4 py-2 font-thin">Search</button>
					</div>
					
				</div>
			
		</form>
		@if(!empty($projectSearch))
			@if(count($projectSearch) > 0)
			<div class=" flex flex-col  p-14   rounde-lg  bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm ">

				<div class="lg:text-2xl md:text-xl text-lg lg:p-3 p-1 font-black text-gray-700">Search {{ app('request')->input('search') }}</div>
				@foreach ( $projectSearch as $searchproject )
					
				
				<div class="flex items-center justify-between w-full p-2 lg:rounded-full md:rounded-full hover:bg-gray-100 cursor-pointer border-2 rounded-lg">
					<a href="{{route('marketplace.details',['project'=>$searchproject])}}">
						<div class="lg:flex md:flex items-center">
							<img src="{{url('storage/'.$searchproject->image_poster)}}" class="object-cover h-12 w-12 mb-2 lg:mb-0 border md:mb-0 rounded-full mr-3"></img>
		
							<div class="flex flex-col">
		
								<div class="text-sm leading-3 text-gray-700 font-bold w-full line-clamp-1">{{$searchproject->name}}</div>
		
								<div class="text-xs text-gray-600 w-full line-clamp-2">{{$searchproject->description}}</div>
							
							</div>
		
							</div>


					</a>
					

				
					
				</div>
				@endforeach	
			</div>
			@endif
		@endif
		
	</div>
</div>

