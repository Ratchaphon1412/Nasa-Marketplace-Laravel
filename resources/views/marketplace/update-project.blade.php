<div class="flex flex-col justify-center  gap-12 p-6">
    <div class="w-full">
        @vite(['resources/js/update-markdown.js'])
    
    
    
    
        <div class="w-full  flex  justify-center items-center mt-24">
            <h1 clsss="text-white  text-5xl font-bold">Update your Project </h1>
        </div>
        <div class="  flex flex-col justify-center w-3/4 mx-auto">
    
            <form id="updateProject" action="{{route('marketplace.update',['project'=>$project])}}" method="POST" enctype="multipart/form-data" class="flex flex-col" >
                @csrf
     
                 <div class="mb-6">
                     <label for="title" class="block mb-2 text-sm font-medium text-white">Title</label>
                     @error('name')
                         <div class="text-red-600">
                             {{ $message }}
                         </div>
                     @enderror
                     <input type="text" id="title" name="name" value="{{$project->name}}" class=" border   text-sm rounded-lg   block w-full p-2.5 bg-white border-gray-600 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Leave a comment..." >
                 </div>
                 
                 <div class="mb-6">
                     <label for="description" class="block mb-2 text-sm font-medium text-white">Description</label>
                     @error('description')
                         <div class="text-red-600">
                             {{ $message }}
                         </div>
                     @enderror
                     <textarea id="description" name="description"  rows="4" class="block p-2.5 w-full text-sm  rounded-lg border    bg-white border-gray-600 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="" >
                        {{$project->description}}
                     </textarea>
                 </div>
                 
         
      
                 
               
              <div class="mb-6">
                 <label for="subCategory" class="block mb-2 text-sm font-medium text-white">Select Type of Category</label>
                 @error('sub_category_id')
                         <div class="text-red-600">
                             {{ $message }}
                         </div>
                 @enderror
                 <select id="subCategory" name="sub_category_id" class="border  text-sm rounded-lg  block w-full p-2.5 bg-white border-gray-600 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" >
                     @foreach (App\Models\Category::all() as $category )
                      @foreach ($category->subCategories as $subCategory)
                        @if($project->sub_category_id == $subCategory->id)
                            <option value="{{$subCategory->id}}" selected>{{$category->name }} | {{$subCategory->name}}</option>
                        @else
                         <option value="{{$subCategory->id}}">{{$category->name }} | {{$subCategory->name}}</option>

                        @endif
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
                         <input id="dropzone-file" name="image_poster" type="file" class="hidden"  />
                     </label>
                 </div> 
                 
              </div> 
             
              <div class="w-full flex flex-col justify-center items-center mb-3" >
                <div class="flex flex-col justify-start items-start w-full">
                     <h3 class="text-xl font-bold text-gray-900 mt-4"  id="preview_section" style="display:none;">Image Poster Preview</h3>
                </div>
                
                     <img id="preview" src="{{url('storage/'.$project->image_poster)}}" alt="your image" class="mt-3 mb-3 w-1/2 h-1/2 " style="display:none;"/>
                 
             </div>
     
             
         
                 <div class="mx-auto w-full  mb-6">
                     <div class="flex flex-col space-y-2 w-full">
                         <label for="editor" class="font-semibold">Content</label>
                         @error('content')
                             <div class="text-red-600">
                                 {{ $message }}
                             </div>
                         @enderror
                         <input type="hidden" name="content" id="contentupdate" >
                         <div id="editorUpdate"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-black bg-white">{{$project->content}}</div>
                            
                     </div>
                 
                 </div>
                 <button id="formsub" type="submit" class="text-white  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Submit</button>
             </form>
    
        </div>
    </div>
    <div class="mt-24 mx-auto p-12">
        <x-action-section>
            <x-slot name="title">
                {{ __('Delete Project') }}
            </x-slot>
        
            <x-slot name="description">
                {{ __('Permanently delete your project.') }}
            </x-slot>
        
            <x-slot name="content">
                <div class="max-w-xl text-sm text-gray-400">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </div>
        
                <div class="mt-5">
                    <x-danger-button data-modal-target="popup-modal" data-modal-toggle="popup-modal" >
                        {{ __('Delete Project') }}
                    </x-danger-button>
                </div>
        
               
            </x-slot>
  


        </x-action-section>

        <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative  rounded-lg shadow bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent  rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg class="mx-auto mb-4  w-12 h-12 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-400">Are you sure you want to delete this project?</h3>

                        <div class="flex flex-row space-x-4 w-full justify-center">
                            <form action="{{route('marketplace.delete',['project' => $project])}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none  focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Yes, I'm sure
                                </button>
                            </form>
                        
                            <button data-modal-hide="popup-modal" type="button" class=" focus:ring-4 focus:outline-none rounded-lg border  text-sm font-medium px-5 py-2.5  focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">No, cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
    

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
