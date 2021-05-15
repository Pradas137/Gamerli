<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
    <div class=" text-center flex h-screen">
    <div class=" bg-gray-600 h-8 md:h-full border-r w-64 text-center border-gray-200">
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
        <div class="w-2/3 mx-auto">
        <h1 class="text-center text-green-600 text-5xl font-bold"> Show Game </h1>
        <form method="POST" action="{{ route('ranking.store') }}">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <div class="w-24 md:w-auto px-3 bg-no-repeat" style="background-image: url('https:{{$ranking->image}}')">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                    </label>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">
                        Name Game*
                        </label>
                        <p name="name" id="name" type="text" placeholder="Name">{{ $ranking->name }}</p>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="developer">
                        Developer*
                        </label>
                        <p name="name" id="name" type="text" placeholder="Name">{{ $ranking->developer }}</p>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="director">
                        Director*
                        </label>
                        <p name="name" id="name" type="text" placeholder="Name">{{ $ranking->director }}</p>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                        Publisher*
                        </label>
                        <p name="name" id="name" type="text" placeholder="Name">{{ $ranking->publisher }}</p>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="date">
                        Date*
                        </label>
                        <h2 name="name" id="name" type="text" placeholder="Name">{{ $ranking->date }}</h2>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="sage">
                        Saga*
                        </label>
                        <p name="name" id="name" type="text" placeholder="Name">{{ $ranking->saga }}</p>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class=" overflow-hidden h-32 ">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                        Page Referent*
                        </label>
                        <p class="" name="name" id="name" type="text" placeholder="Name">{{ $ranking->page_reference }}</p>
                    </div>
                    <div class="md:w-full px-10">
                        <a href="/admin/dashboard/ranking" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                        Atras
                        </a>
                    </div>
                </div>
            </div>
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
                <li class="font-bolt mb-4"><a href="/dashboard/publicList">Global list</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/rankingUser">Ranking Games</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard/request">My Request</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/myList">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/friend">Friend</a></li>

            </ul>
        </div>
        <div class="w-2/3 mx-auto">
        <h1 class="text-center text-green-600 text-5xl font-bold"> Create Game </h1>
        <form method="POST" action="{{ route('ranking.store') }}">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">
                        Name Game*
                        </label>
                        <p class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">{{ $ranking->name }}</p>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="developer">
                        Developer*
                        </label>
                        <p class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">{{ $ranking->developer }}</p>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="director">
                        Director*
                        </label>
                        <p class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">{{ $ranking->director }}</p>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                        Publisher*
                        </label>
                        <p class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">{{ $ranking->publisher }}</p>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="date">
                        Date*
                        </label>
                        <p class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">{{ $ranking->date }}</p>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                        Sumary*
                        </label>
                        <p class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">{{ $ranking->pegi }}</p>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                        Page Referent*
                        </label>
                        <p class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">{{ $ranking->summary }}</p>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="sage">
                        Saga*
                        </label>
                        <p class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">{{ $ranking->page_reference }}</p>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                        Image*
                        </label>
                        <p class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">{{ $ranking->image }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="-mx-3 md:flex mt-2">
            <div class="md:w-full px-10">
                <a href="/dashboard/rankingUser" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
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