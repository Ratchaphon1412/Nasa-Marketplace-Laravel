<x-guest-layout>
    <section id="coverImage" class="justify-center items-center overflow-x-hidden bg-fixed w-full    bg-cover bg-no-repeat " style="background-image:url('https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80')" >
        <div class="flex flex-col justify-center items-center  bg-black rounded-lg relative p-12   w-auto overflow-hidden backdrop-filter backdrop-blur-sm bg-opacity-10  bg-[url('https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80')] ">
            <div class="grid grid-cols-1 md:grid-cols-2 backdrop-filter backdrop-blur-sm bg-opacity-80 -m-8   bg-black text-white  rounded-lg shadow-lg overflow-hidden  w-3/4  drop-shadow-lg">
                <img src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80"  alt="Mountain"
                class="w-full h-full object-cover">
                <div id="text Title" class="flex justify-center items-center ">
                    <div id="text" class="p-6 flex-col  justify-center items-center space-y-4  gap-4">
                        <div>
                            <p class="text-base">Opensoruce Project</p>
                            <h2 class="text-3xl  font-black">Lorem ipsum dolor sit amet, consectetur </h2>
                        </div>
                        <div class="flex flex-row ">
                            <i class="bi bi-calendar-week font-bold mr-2"></i>
                            <p class=" leading-tight  text-base ">
                               2023 Oct 05 - 2023 Dec 05
                            </p>
                        </div>
                        <div class="flex flex-row mb-4">
                            <i class="bi bi-geo-alt-fill mr-2"></i>
                            <p class="w-3/4">
                                Bangkok | Thailand

                            </p>
                        </div>
                      
                        <button id="joinButton"  class="py-2.5 px-5 mr-2 mb-2  text-sm font-medium  focus:outline-none text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Join

                        </button>
                    

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
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg  hover:border-gray-300 hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Manage</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg  hover:border-gray-300 hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Team</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg  hover:border-gray-300 hover:text-gray-300" id="approve-tab" data-tabs-target="#approve" type="button" role="tab" aria-controls="approve" aria-selected="false">Approve</button>
        </li>


    </ul>
</div>
<div id="myTabContent">
    <div class="hidden p-4 rounded-lg " id="profile" role="tabpanel" aria-labelledby="profile-tab">
        
    </div>
    <div class="hidden p-4 rounded-lg " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        @include('marketplace.update-project')
    </div>
    <div class="hidden p-4 rounded-lg " id="settings" role="tabpanel" aria-labelledby="settings-tab">
        @include('marketplace.team-project')
    </div>
    <div class="hidden p-4 rounded-lg " id="approve" role="tabpanel" aria-labelledby="approve-tab">
        @include('marketplace.approve-team')
    </div>
    
</div>


</x-guest-layout>