<div class="hidden w-28 bg-indigo-700 overflow-y-auto md:block">
  <div class="w-full py-6 flex flex-col items-center">
    <div class="flex-shrink-0 flex items-center">
      <img src="{{ asset('images/logo-no-bg.png') }}" class=" mr-3 sm:h-10" alt="Flowbite Logo" />
    </div>
    <div class="flex-1 mt-6 w-full px-2 space-y-1">
      <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-800 hover:text-white" -->
      <a href="/user" class="{{Route::currentRouteName() == 'Home' ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-800 hover:text-white'}} group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
        <!--
            Heroicon name: outline/home

            Current: "text-white", Default: "text-indigo-300 group-hover:text-white"
          -->
        <svg class="text-indigo-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span class="mt-2">Home</span>
      </a>

      <a href="/genres" class="{{Route::currentRouteName() == 'Genres' ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-800 hover:text-white'}} group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
        <!-- Heroicon name: outline/view-grid -->
        <svg class="text-indigo-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
        </svg>
        <span class="mt-2">Genres</span>
      </a>
      <h1></h1>

      <a href="/artists" class="{{Route::currentRouteName() == 'Artists' ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-800 hover:text-white'}} group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium" aria-current="page">
        <!-- Heroicon name: outline/photograph -->

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-white h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        </svg>
        <span class="mt-2">Artists</span>
      </a>

      <a href="/bands" class="{{Route::currentRouteName() == 'Bands' ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-800 hover:text-white'}} group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
        <!-- Heroicon name: outline/user-group -->
        <svg class="text-indigo-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span class="mt-2">Bands</span>
      </a>

   
      <form class="{{Route::currentRouteName() == 'xxx' ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-800 hover:text-white'}} group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="text-indigo-300 group-hover:text-white h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
        </svg>
                        <x-dropdown-link :href="route('logout')" class="{{Route::currentRouteName() == 'xxx' ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-800 hover:text-white'}} group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            Logout
                        </x-dropdown-link>
                    </form>
      <div class="hidden">

        <a href="#" class="{{Route::currentRouteName() == 'xxx' ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-800 hover:text-white'}} group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium">
          <!-- Heroicon name: outline/cog -->
          <svg class="text-indigo-300 group-hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <span class="mt-2">Settings</span>
        </a>
      </div>
    </div>
  </div>
</div>

<!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->

<div id="drawer-navigation-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full" tabindex="-1" aria-labelledby="drawer-navigation-sidebar-label">
  <h5 id="drawer-navigation-sidebar-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>


  <div class="md:hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 z-40 flex">

      <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

      <div class="relative max-w-xs w-full bg-indigo-700 pt-5 pb-4 flex-1 flex flex-col">

        <div class="absolute top-1 right-0 -mr-14 p-1">
          <button data-drawer-hide="drawer-navigation-sidebar" aria-controls="drawer-navigation-sidebar" type="button" class="h-12 w-12 rounded-full flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-white">
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="sr-only">Close sidebar</span>
          </button>

        </div>

        <div class="flex-shrink-0 px-4 flex items-center">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow">
        </div>
        <div class="mt-5 flex-1 h-0 px-2 overflow-y-auto">
          <nav class="h-full flex flex-col">
            <div class="space-y-1">
              <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-800 hover:text-white" -->
              <a href="/user" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
                <!--
                          Heroicon name: outline/home
        
                          Current: "text-white", Default: "text-indigo-300 group-hover:text-white"
                        -->
                <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span>Home</span>
              </a>

              <a href="/genres" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
                <!-- Heroicon name: outline/view-grid -->
                <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <span>Genres</span>
              </a>

              <a href="/artists" class="bg-indigo-800 text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium" aria-current="page">
                <!-- Heroicon name: outline/photograph -->

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white mr-3 h-6 w-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>

                <span>Artists</span>
              </a>

              <a href="/bands" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
                <!-- Heroicon name: outline/user-group -->
                <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span>Bands</span>
              </a>

              <a href="#" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
                <!-- Heroicon name: outline/collection -->

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
                <span>Logout</span>
              </a>
              <div class="hidden">

                <a href="#" class="text-indigo-100 hover:bg-indigo-800 hover:text-white group py-2 px-3 rounded-md flex items-center text-sm font-medium">
                  <!-- Heroicon name: outline/cog -->
                  <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  <span>Settings</span>
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
      </div>
    </div>
  </div>

</div>