<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
    <div class="carousel"> 
   <div class="carousel-inner"> 
      <input name="carousel" class="carousel-open" id="carousel-1" aria-hidden="true" type="radio" hidden="true" Checked/> 
      <div class=" bg-contain bg-center  bg-no-repeat carousel-item" style="background-image: url('https:{{$image}}')"> 
         <h1 class="text-yellow-600">ROL</h1> 
      </div> 
      <input name="carousel" class="carousel-open" id="carousel-2" aria-hidden="true" type="radio" hidden="true"/> 
      <div class="bg-contain bg-center  bg-no-repeat  carousel-item" style="background-image: url('https:{{$image2}}')"> 
         <h1>SHOTER</h1> 
      </div> 
      <label class="carousel-control prev control-1" for="carousel-2">‹</label>
      <label class="carousel-control next control-1" for="carousel-2">›</label>
      <label class="carousel-control prev control-2" for="carousel-1">‹</label>
      <label class="carousel-control next control-2" for="carousel-1">›</label>
      <ol class="carousel-indicators"> 
         <li> 
            <label class="carousel-bullet" for="carousel-1">•</label> </li> 
         <li> 
            <label class="carousel-bullet" for="carousel-2">•</label> </li> 
      </ol> 
   </div> 
</div>

    <div class="options p-10 text-center mx-2 space-y-2">
    <h1 class="text-green-600 text-5xl font-bold"> 
        Control Panel 
    </h1>
    <div class="px-6 py-4 grid grid-rows-3 grid-flow-col gap-2 gap-3 p-4"> 
        <a href="/admin/dashboard/ranking" class="text-3xl transition duration-75 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Global Rankings
        </a>

        <a href="/admin/dashboard/adminPublicList" class="text-3xl transition duration-100 ease-in-out 

                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Public Lists
        </a>

        <a href="/admin/dashboard/adminMyList" class="text-3xl transition duration-100 ease-in-out 

                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            My Lists
        </a>
        <a href="/admin/dashboard/request" class="text-3xl transition duration-500 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Import CSV
        </a>
        <a href="/admin/dashboard/profile" class="text-3xl transition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Profiles
        </a>
    </div> 
    </div>
    @else
    <div class="carousel"> 
   <div class="carousel-inner"> 
      <input name="carousel" class="carousel-open" id="carousel-1" aria-hidden="true" type="radio" hidden="true" Checked/> 
      <div class=" bg-contain bg-center  bg-no-repeat carousel-item" style="background-image: url('https:{{$image}}')"> 
         <h1 class="text-yellow-600">ROL</h1> 
      </div> 
      <input name="carousel" class="carousel-open" id="carousel-2" aria-hidden="true" type="radio" hidden="true"/> 
      <div class="bg-contain bg-center  bg-no-repeat  carousel-item" style="background-image: url('https:{{$image2}}')"> 
         <h1>SHOTER</h1> 
      </div> 
      <label class="carousel-control prev control-1" for="carousel-2">‹</label>
      <label class="carousel-control next control-1" for="carousel-2">›</label>
      <label class="carousel-control prev control-2" for="carousel-1">‹</label>
      <label class="carousel-control next control-2" for="carousel-1">›</label>
      <ol class="carousel-indicators"> 
         <li> 
            <label class="carousel-bullet" for="carousel-1">•</label> </li> 
         <li> 
            <label class="carousel-bullet" for="carousel-2">•</label> </li> 
      </ol> 
   </div> 
</div>

    <div class="options p-10 text-center mx-2 space-y-2">
    <h1 class="text-green-600 text-5xl font-bold"> 
        Control Panel 
    </h1>
    <div class="px-6 py-4 grid grid-rows-3 grid-flow-col gap-2 gap-3 p-4"> 
        <a href="/dashboard/rankingUser" class="text-3xl transition duration-75 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Global Rankings
        </a>
        <a href="/dashboard/PublicList" class="text-3xl transition duration-100 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Public Lists
        </a>
        <a href="/dashboard/MyList" class="text-3xl transition duration-100 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            My Lists
        </a>
        <a href="/dashboard/profiles" class="text-3xl transition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Profiles
        </a>
    </div> 
    </div>
    @endif
</x-app-layout>
