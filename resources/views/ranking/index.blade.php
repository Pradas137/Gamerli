<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
      <div class="bg-gray-600 h-8 md:h-full border-r w-64 text-center text-white border-gray-200">
        <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
        <ul>
          <li class="font-bolt mb-4"><a href="/admin/dashboard">Home</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/publicList">Public List</a></li>
        <ul>
        <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
        <ul>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/requests">My Request</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/myList">My Lists</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Friend</a></li>
        </ul>
      </div>
      <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
          <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
            <input class="form-control mr -sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            <div class="text-center">
              <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post" onclick="addPost()">Add Post</a>
            </div>
          </form>
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Surname</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($rankings as $game)
              <tr id="row_{{$game->id}}">
                <td>{{ $game->id  }}</td>
                <td>{{ $game->name }}</td>
                <td>{{ $game->surname }}</td>
                <td>
                <form action="{{route('ranking.destroy',$game->id) }}" method="POST">
                   
                   <a class="btn btn-info" href="{{ route('ranking.show',$game->id) }}">Show</a>
   
                   <a class="btn btn-primary" href="{{ route('ranking.edit',$game->id) }}">Edit</a>
  
                   @csrf
                   @method('DELETE')
     
                   <button type="submit" class="btn btn-danger">Delete</button>
               </form>
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
    @else
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
      <div class="bg-gray-600 h-8 md:h-full border-r w-64 text-center text-white border-gray-200">
        <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
        <ul>
          <li class="font-bolt mb-4"><a href="/admin/dashboard">Home</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/publicList">Public List</a></li>
        <ul>
        <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
        <ul>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/requests">My Request</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/myList">My Lists</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Friend</a></li>
        </ul>
      </div>
      <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
          <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
            <input class="form-control mr -sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            <div class="text-center">
              <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post" onclick="addPost()">Add Post</a>
            </div>
          </form>
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Surname</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($rankings as $game)
              <tr id="row_{{$game->id}}">
                <td>{{ $game->id  }}</td>
                <td>{{ $game->name }}</td>
                <td>{{ $game->surname }}</td>
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
    @endif
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{asset('js/ranking.js')}}"></script>
</x-app-layout>
