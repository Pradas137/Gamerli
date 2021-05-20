<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
    <div class="flex h-screen">
        <div style="background-image: url(/images/fondonegro.jpg)" class=" h-8 md:h-full border-r w-64 text-center text-white border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/ranking">Ranking Game</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/adminPublicList">Public List</a></li>

            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/request">Imports</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
            </ul>
        </div>
        <div class="w-2/3 mx-auto">
        <div class="bg-blue-200 shadow-md rounded my-6">
            <!--<form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
              <input class="form-control mr -sm-2" type="search" placeholder="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>-->
            <div class="text-center">
              <h1 class="text-center text-green-600 text-5xl font-bold"> My Lists </h1>
              <a class="btn btn-info text-left inline-flex items-left px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="/admin/dashboard/adminMyList/create">Add List</a>
            </div>
            <table class="text-center w-full border-collapse">
              <thead class="bg-blue-700">
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">List Name</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">User</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($mylist as $list)
                  <tr id="row_{{$list->id}}">
                    <td class="bg-blue-500">{{ $list->name  }}</td>
                    <td class="bg-blue-500">{{ $list->user_id }}</td>
                    <td class="bg-blue-500">
                      <a class="btn btn-info text-center inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="/admin/dashboard/adminMyList/{{$list->id}}">Show</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot class="bg-blue-700">
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">User</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
              </tr>
			        </tfoot>
              </table>
              <span class="text-white">
                {{ $mylist->links() }}
              </span>
          </div>
      </div>   
    </div>
    @else
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="bg-gray-500 h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/rankingUser">Ranking Game</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/PublicList">Public List</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/profiles">Profile</a></li>
            </ul>
        </div>
        <div class="w-2/3 mx-auto">
          <!--<h1 class="text-center text-green-600 text-5xl font-bold"> My List </h1>-->
          <div class="bg-blue-200 shadow-md rounded my-6">
            <!--<form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
              <input class="form-control mr -sm-2" type="search" placeholder="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>-->
            <div class="text-center">
              <h1 class="text-center text-green-600 text-2xl font-bold"> My Lists </h1>
              <a class="btn btn-info text-left inline-flex items-left px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="/dashboard/MyList/create">Add List</a>
            </div>
            <table class="text-center w-full border-collapse">
              <thead class="bg-blue-700">
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">List Name</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">User</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($mylist as $list)
                  <tr id="row_{{$list->id}}">
                    <td class="bg-blue-500">{{ $list->name  }}</td>
                    <td class="bg-blue-500">{{ $list->user_id }}</td>
                    <td class="bg-blue-500">
                      <a class="btn btn-info text-center inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="/dashboard/MyList/{{$list->id}}">Show</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot class="bg-blue-700">
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">User</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
              </tr>
			        </tfoot>
              </table>
              <span class="text-white">
                {{ $mylist->links() }}
              </span>
          </div>
      </div>   
    </div>
        </div>
      </div>
    @endif
</x-app-layout>
