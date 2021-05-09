<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
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
        <div class="p-6">
            
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
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-10">Ranking</h1>
            <table class="w-full border-2 border-mtr-dark table-auto">
        <caption class="mb-4 text-4xl">GamerliController</caption>
      <form action="/prueva2/search" method="get">
        <div class="input-group">
            <input type="search" class="form-control">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </div>
      </form>
      <div class="text-center">
        <button type="button" id="addNewTerm" onClick="addTermForm();" class="m-3 bg-blue-500 bg-mtr-dark p-1 w-4/12 text-center font-extrabold rounded-sm text-base">ADD Terms</button>
      </div>
        <thead>
          <tr>
            <th class="border-2 border-mtr-dark">NAME</th>
            <th class="border-2 border-mtr-dark">EMAIl</th>
            <th class="border-2 border-mtr-dark">Action</th>

          </tr>
        </thead>
        <tbody> 
        @foreach ($user as $student)
          <tr class="text-center">
              <td class="border-2 border-mtr-dark">{{ $student->name }}</td>
              <td class="border-2 border-mtr-dark">{{ $student->email }}</td>
              <td class="p-2 flex flex-col justify-center md:flex-row space-y-2 md:space-y-0 md:space-x-6">
                <button id="edit" onClick="editRow({{ $student->id }})" class="bg-mtr-dark py-2 px-4 text-white rounded text">Edit</button>
                <button id="save" onClick="saveChange({{ $student->id }})" class="hidden bg-mtr-dark py-2 px-4 text-white rounded input">Save</button>
                <button id="cancel" onClick="cancelChange({{ $student->id }})" class="hidden bg-red-500 py-2 px-4 text-white rounded input">Cancel</button>                
                <a href="/admin/terms/delete/{{$student->id}}" class="bg-red-500 py-2 px-4 text-white rounded text">Delete</a>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
        <div>   
    @endif
</x-app-layout>
