<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
    <div class="flex h-screen">
      <div style="background-image: url(https://mcdn.wallpapersafari.com/medium/20/74/JfPDgt.jpg)" class=" h-8 md:h-full border-r w-64 text-center text-white border-gray-200">
        <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
        <ul>
          <li class="font-bolt mb-4"><a href="/admin/dashboard">Home</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/adminPublicList">Global list</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/ranking">Ranking</a></li>
        <ul>
        <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
        <ul>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/requests">My Request</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/adminMyList">My Lists</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Friend</a></li>
        </ul>
      </div>
        <div class="w-2/3 mx-auto">
            <h1 class="text-center text-green-600 text-5xl font-bold"> Import CSV </h1>
            <div class="text-center px-6 py-4 grid grid-rows-3 grid-flow-col gap-2 gap-3 p-4"> 
                <a href="/admin/dashboard/file-import-export-platforms" class="text-3xl transition duration-75 ease-in-out 
                            bg-green-300 hover:bg-green-600 transform 
                            hover:-translate-y-1 hover:scale-100 
                            rounded-lg p-4 border border-green-900">
                    Import Platforms
                </a>
                <a href="/admin/dashboard/file-import-export-games" class="text-3xl transition duration-100 ease-in-out 
                            bg-green-300 hover:bg-green-600 transform 
                            hover:-translate-y-1 hover:scale-100 
                            rounded-lg p-4 border border-green-900">
                    Import Games
                </a>
            <div>    
        </div>
    @else
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="text-white bg-gray-600 h-8 md:h-full border-r w-64 text-center border-gray-400">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/publicList">Public List</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/ranking">Ranking Game</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/requests">My Request</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/myList">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Friend</a></li>
            </ul>
        </div>
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-10">Request</h1>
        <div>    
    </div>
    @endif
</x-app-layout>
