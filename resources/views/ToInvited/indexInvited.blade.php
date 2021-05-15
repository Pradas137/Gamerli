<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
      <div class="bg-gray-600 h-8 md:h-full border-r w-64 text-center text-white border-gray-200">
        <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
        <ul>
          <li class="font-bolt mb-4"><a href="">Home</a></li>
          <li class="font-bolt mb-4"><a href="">Public List</a></li>
        <ul>
        <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
        <ul>
          <li class="font-bolt mb-4"><a href="">My Request</a></li>
          <li class="font-bolt mb-4"><a href="">My Lists</a></li>
          <li class="font-bolt mb-4"><a href="">Profile</a></li>
          <li class="font-bolt mb-4"><a href="">Friend</a></li>
        </ul>
      </div>
      <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
          <!--<form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
            <input class="form-control mr -sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>-->
          <select class="form-control form-control-md" id="selectLang">
            <option selected disabled>Select Language </option>
                @foreach($rankings as $games)
                  <option value="{{ $games->name  }}">{{ $games->name}}</option>
                @endforeach
          </select>
          <div class="text-center">
            <a class="btn btn-info text-center inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="/dashboard/toInvited/create ">Add Game</a>
            </div>
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Date</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Pegi</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Saga</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($rankings as $game)
              <tr id="row_{{$game->id}}">
                <td>{{ $game->name  }}</td>
                <td>{{ $game->date }}</td>
                <td>{{ $game->pegi }}</td>
                <td>{{ $game->saga }}</td>
                <td>
                   <a class="btn btn-info text-center inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="/dashboard/toInvited/{{$game->id}}">Show</a>
                   @csrf
               </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <span>
            {{ $rankings->links() }}
          </span>
        </div>
      </div>
    </div>
    <script src="{{asset('js/ranking.js')}}"></script>
    <script src="{{asset('js/toInvited.js')}}"></script>
</x-app-layout>