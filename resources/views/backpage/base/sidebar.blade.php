  <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

      <!-- link -->
      <a href="{{ route('home') }}" class="mb-4 capitalize font-medium text-sm border p-3 {{ request()->routeIs('home') ? 'bg-blue-500 text-white rounded-lg hover:text-black-600' : ''  }}">
       <i class="fa-solid fa-chart-pie"></i>                
         Dashboard
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="/water" class="mb-4 capitalize font-medium text-sm border p-3 {{ request()->routeIs('water.index') ? 'bg-blue-500 text-white rounded-lg hover:text-black-600' : ''  }}" >
       <i class="fa-solid fa-water"></i>
        Sungai
      </a>
      <!-- end link -->
    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->