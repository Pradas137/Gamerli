<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
    <div class=" text-center flex h-screen">
        <div style="background-image: url(/images/fondonegro.jpg)" class=" h-8 md:h-full border-r w-64 text-center text-white border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/adminPublicList">Public List</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/ranking">Ranking Game</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/requests">My Request</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/adminMyList">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
            </ul>
        </div>
        <div class="w-2/3 mx-auto">
            <h1 class="text-center text-green-600 text-5xl font-bold"> Create Game </h1>
            <form method="POST" action="{{ route('adminMyList.store') }}">
                @csrf
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">
                            List Name*
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="namelist" id="namelist" type="text" placeholder="Name">
                        </div>
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">
                            List visibility*
                            </label>
                            <select class="form-control" name="visibility" id="visibility">
                                <option value="1">privado</option>
                                <option value="0">public</option>
                            </select>                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-2">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="platform">
                            Game*
                            </label>
                            <select class="form-control" name="select" id="select">
                                <option>Select 1 Game</option>
                                @foreach ($games as $item)
                                <option value="{{ $item->id }}" {{ ( $item->id == 1) ? 'selected' : '' }}> {{ $item->name }} </option>
                                @endforeach
                            </select>
                        <div>
                    </div>
                </div>
                <div class="-mx-3 md:flex mt-2">
                    <div class="md:w-full px-10">
                        <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                        Button
                        </button>
                    </div>
                    <div class="md:w-full px-10">
                        <a href="/admin/dashboard/adminMyList" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                            Atras
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @else
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/PublicList">Global list</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/rankingUser">Ranking Games</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard/request">My Request</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/MyList">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/profiles">Profile</a></li>

            </ul>
        </div>
        <div class="w-2/3 mx-auto">
            <h1 class="text-center text-green-600 text-5xl font-bold"> Create Game </h1>
            <form method="POST" action="{{ route('MyList.store ') }}">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">
                         Name List
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-2">
                    <select class="form-control" name="platform_id" id="platform_id">
                        <option>Select Game</option>
                        @foreach ($list as $item)
                        <option value="{{ $item->id }}" {{ ( $item->id == 1) ? 'selected' : '' }}> {{ $item->name }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
        <div class="-mx-3 md:flex mt-2">
          <div class="md:w-full px-10">
            <a class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
              Button</a>
          </div>
            <div class="md:w-full px-10">
            <a href="/dashboard/PublicList" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                    Atras
            </a>
            </div>
        </div>
      </div>
        </form>
    </div>
</div>    
    </div>
    @endif
</x-app-layout>