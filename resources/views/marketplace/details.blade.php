<x-guest-layout>

    
    <section id="coverImage" class="justify-center items-center overflow-x-hidden bg-fixed w-full pt-24    bg-cover bg-no-repeat " style="background-image:url('{{url('storage/'.$project->image_poster)}}')" >
        <div class="flex flex-col justify-center items-center  bg-black rounded-lg relative p-12   w-auto overflow-hidden backdrop-filter backdrop-blur-sm bg-opacity-10  bg-[url({{url('storage/'.$project->image_poster)}})] ">
            <div class="grid grid-cols-1 md:grid-cols-2 backdrop-filter backdrop-blur-sm bg-opacity-80 -m-8   bg-black text-white  rounded-lg shadow-lg overflow-hidden  w-3/4  drop-shadow-lg">
                <img src="{{url('/storage/'.$project->image_poster)}}"  alt="Mountain"
                class="w-full h-full object-cover">
                <div id="text Title" class="flex justify-center items-center ">
                    <div id="text" class="p-6 flex-col  justify-center items-center space-y-4  gap-4">
                        <div>
                            <p class="text-base">{{$project->subCategory->name}}</p>
                            <h2 class="text-3xl  font-black">{{$project->name}}</h2>
                        </div>
                        <div class="flex flex-row ">
                            <i class="bi bi-calendar-week font-bold mr-2"></i>
                            <p class=" leading-tight  text-base line-clamp-3">
                                {{$project->description}}
                            </p>
                        </div>
                        <div class="flex flex-row mb-4">
                            <i class="bi bi-geo-alt-fill mr-2"></i>
                            <p class="w-3/4">
                                {{$project->subCategory->category->name}}

                            </p>
                        </div>
                        @auth
                            @if ($project->usersInterested()->where('user_id',auth()->user()->id)->count()>0)
                            <form action="{{route('marketplace.interest',['project'=>$project])}}">

                                <button id="joinButton" type="submit"  class="py-2.5 px-5 mr-2 mb-2  text-sm font-medium  focus:outline-none text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    Interested
        
                                </button>
                            </form>
                            @else
                            <form action="{{route('marketplace.interest',['project'=>$project])}}">

                                <button id="joinButton" type="submit"  class="py-2.5 px-5 mr-2 mb-2  text-sm font-medium  focus:outline-none text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    Interest
        
                                </button>
                            </form>
                            @endif
                        @endauth
                        

                    </div>
                </div>
            </div>
        </div>
    </section>


<div class="mb-4 border-b border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:border-gray-300 hover:text-gray-300" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Details</button>
        </li>
        @auth
            @if($project->owner->id == auth()->user()->id)
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg  hover:border-gray-300 hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Manage</button>
            </li>
            @endif

            @if($project->owner->id == auth()->user()->id)
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg  hover:border-gray-300 hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Interest</button>
            </li>
            @endif
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg  hover:border-gray-300 hover:text-gray-300" id="posts-tab" data-tabs-target="#posts" type="button" role="tab" aria-controls="posts" aria-selected="false">Posts</button>
            </li>
        @endauth

    </ul>
</div>
<div id="myTabContent">
    
    <div class="hidden p-4 rounded-lg " id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="flex flex-col   items-center mx-auto w-full">
           <div class="flex  flex-col space-y-8">
            {!! \Illuminate\Support\Str::markdown($project->content) !!}
           </div>
        </div>
    </div> 
    @auth
        @if($project->owner->id == auth()->user()->id)
            <div class="hidden p-4 rounded-lg " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                @include('marketplace.update-project')
            </div>
        @endif

        @if($project->owner->id == auth()->user()->id)
            <div class="hidden p-4 rounded-lg " id="settings" role="tabpanel" aria-labelledby="settings-tab">
            @include('marketplace.approve-team')
            </div>
        @endif
        <div class="hidden p-4 rounded-lg " id="posts" role="tabpanel" aria-labelledby="posts-tab">
            @include('marketplace.post')
        </div>

    @endauth
</div>


</x-guest-layout>