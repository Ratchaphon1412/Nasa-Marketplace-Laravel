<x-app-layout>
    


    <div class="h-96 p-12 bg-fixed  flex justify-center items-center bg-cover bg-no-repeat"
    style="background-image:url('https://images.unsplash.com/photo-1541185933-ef5d8ed016c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');"
    >
      
    </div>
    
    <div class="w-full  flex  justify-center items-center mt-24">
        <h1 clsss="text-white  text-5xl font-bold">Start your Project </h1>
    </div>
    <div class="  flex flex-col justify-center  ">

        <form id="createPostForm" action="{{route('marketplace.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-col" >
           @csrf

            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-white">Title</label>
                @error('name')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" id="title" name="name" class=" border   text-sm rounded-lg   block w-full p-2.5 bg-white border-gray-600 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Leave a comment..." required>
            </div>
            
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-white">Description</label>
                @error('description')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
                @enderror
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm  rounded-lg border    bg-white border-gray-600 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Leave a comment..." required></textarea>
            </div>
            
    
 
            
          
         <div class="mb-6">
            <label for="subCategory" class="block mb-2 text-sm font-medium text-white">Select Type of Category</label>
            @error('sub_category_id')
                    <div class="text-red-600">
                        {{ $message }}
                    </div>
            @enderror
            <select id="subCategory" name="sub_category_id" class="border  text-sm rounded-lg  block w-full p-2.5 bg-white border-gray-600 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" required>
                @foreach ($categories as $category )
                 @foreach ($category->subCategories as $subCategory)
                    <option value="{{$subCategory->id}}">{{$category->name }} | {{$subCategory->name}}</option>
                 @endforeach
                @endforeach
            
            </select>
         </div>


         <div>
            <label for="dropzone-file" class="block mb-2 text-sm font-medium text-white">Project Image Profile</label>
            @error('image_poster')
                <div class="text-red-600">
                    {{ $message }}
                </div>
            @enderror
            <div class="flex items-center justify-center w-full mb-6">
    
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2  border-dashed rounded-lg cursor-pointer  bg-tranparent  border-gray-600 hover:border-gray-500 ">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" name="image_poster" type="file" class="hidden"  required/>
                </label>
            </div> 
            <div class="w-full flex flex-col justify-center items-center mb-3" >
                <div class="flex flex-col justify-start items-start w-full">
                     <h3 class="text-xl font-bold text-gray-900 mt-4"  id="preview_section" style="display:none;">Image Poster Preview</h3>
                </div>
                
                     <img id="preview" src="" alt="your image" class="mt-3 mb-3 w-1/2 h-1/2 " style="display:none;"/>
                 
             </div>
            
         </div> 

    
        

        
    
            <div class="mx-auto w-full  mb-6">
                <div class="flex flex-col space-y-2 w-full">
                    <label for="editor" class="font-semibold">Content</label>
                    @error('content')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="hidden" name="content" id="content">
                    <div id="editor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-black bg-white"></div>
                       
                </div>
            
            </div>
            <button id="formsub" type="submit" class="text-white  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Submit</button>
        </form>
    

    </div>

    


</x-app-layout>

<script>
        
    let poster = document.getElementById("dropzone-file");

    poster.addEventListener("change", function(e){
        preview = document.getElementById('preview');
        preview.style.display = 'block';

        preview_section = document.getElementById('preview_section');
        preview_section.style.display = 'block';

        const [file] = poster.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }

        
    });

   


</script>