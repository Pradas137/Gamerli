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
          <button type="button" id="addNewGame" onClick="addGameForm();" class="m-3 bg-mtr-dark p-1 w-4/12 text-center font-extrabold rounded-sm text-base">ADD Gamer</button>
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
      @foreach ($rankings as $game)
        @if($game->deleted_at == null)
            <tr class="text-center" data-id="{{ $game->id }}">
              <td class="border-2 border-mtr-dark text text-blue-500">
                <a href="/admin/ranking/{{ $game->id }}">{{ $game->name }}</a>
              </td>
              <td class="hidden border-2 border-mtr-dark input">
                <input value="{{ $game->name }}" type="text" name="nameEdit" class="nameEdit">
              </td>
              <td class="border-2 border-mtr-dark text">{{ $game->surname }}</td>
              <td class="hidden border-2 border-mtr-dark input">
                <input value="{{ $game->surname }}" type="text" name="descEdit" class="descEdit">
              </td>
              <td class="p-2 flex flex-col justify-center md:flex-row space-y-2 md:space-y-0 md:space-x-6">
                <button id="edit" onClick="editRow({{ $game->id }})" class="bg-green-500 bg-mtr-dark py-2 px-4 text-white rounded text">Edit</button>
                <form action="/admin/dashboard/ranking/{{ $game->id }}" method="post">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button onClick="(e) => saveChange(e)" type="button"id="save"  class="hidden bg-green-500 bg-mtr-dark py-2 px-4 text-white rounded input">Save</button>
                </form>
                  <button id="cancel" onClick="cancelChange({{ $game->id }})" class="hidden bg-red-500 py-2 px-4 text-white rounded input">Cancel</button>                
                <a href="/admin/ranking/delete/{{$game->id}}" class="bg-red-500 py-2 px-4 text-white rounded text">Delete</a>
              </td>
            </tr>
        @endif
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
    @section('breadcrumbs')
        {{ Breadcrumbs::render('Ranking') }}
    @endsection
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
                   <td><a href="javascript:void(0)" data-id="{{ $game->id }}" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td>
                   <td>
                    <a href="javascript:void(0)" data-id="{{ $game->id }}" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td>
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
 <script src="{{asset('js/ranking.js')}}"></script>
</x-app-layout>
