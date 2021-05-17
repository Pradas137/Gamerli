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
                <li class="font-bolt mb-4"><a href="/admin/dashboard/ranking">Ranking Game</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/request">My Request</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/myList">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Friend</a></li>
            </ul>
        </div>
        <div class="w-1/3 mx-auto">
        <div class="bg-blue-200 shadow-md rounded my-6">
          <!--<form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
            <input class="form-control mr -sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>-->
          <div class="text-center">
            <a class="btn btn-info text-center inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="/admin/dashboard/ranking/create">Add Game</a>
            </div>
            <div class="w-11/12 mx-auto flex mt-2 mb-2 justify-around items-center" id="form_alumn">
              <section class="filter flex-wrap justify-around">
                <x-input type="text" class="p-1 mt-2 xl:mt-0" placeholder="Name" name="name" id="" />
                <x-input type="date" class="p-1 mt-2 xl:mt-0" placeholder="Date" name="date" id="" />
                <x-input type="number" class="p-1 mt-2 xl:mt-0" placeholder="Pegi" name="pegi" id="" />
                <x-input type="text" class="p-1 mt-2 xl:mt-0" placeholder="Saga" name="saga" id="" />
              </section>
			        <button type="submit" class="filter btn primary-btn w-2/1  bg-green-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" ">Filtra</button>
		        </div>
         <table class="text-1xl text-center w-full border-collapse">
            <thead class="bg-blue-700">
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Game</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">User</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($publicList as $list)
              <tr id="row_{{$mylist->id}}">
                <td class="bg-blue-500">{{ $list->name  }}</td>
                <td class="bg-blue-600">{{ $list->game_id }}</td>
                <td class="bg-blue-500">{{ $list->user_id }}</td>
              </tr>
            @endforeach
            </tbody>
            <tfoot class="bg-blue-700">
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Game</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">User</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
              </tr>
			</tfoot>
          </table>
          <ul class="pagination"></ul>
          <span class="text-white">
            {{ $publicList->links() }}
          </span>
        </div>
      </div>
    </div>
    @else
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="bg-gray-600 h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/ranking">Rankings Global</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard/request">My Request</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/mylist">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/friend">Friend</a></li>

            </ul>
        </div>
        <div class="p-6">
            <h1 class="text-white text-4xl font-bold mb-10">Public List</h1>
        <div>    
    </div>
    @endif
</x-app-layout>
