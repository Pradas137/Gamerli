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
                <li class="font-bolt mb-4"><a href="/admin/dashboard/request">Imports</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/adminMyList">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
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
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="developer">
                            Developer
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="developer" id="developer" type="text" placeholder="Developer">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="director">
                            Director
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="director" id="director" type="text" placeholder="Director">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                            Publisher
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="publisher" id="publisher" type="text" placeholder="Publisher">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="date">
                            Date*
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="date" id="date" type="date" placeholder="Date">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                            Summary
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="summary" id="summary" type="text" placeholder="Summary">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                            Page Referent
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="page_reference" id="page_reference" type="text" placeholder="Page_reference">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="sage">
                            Saga
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="saga" id="saga" type="text" placeholder="Saga">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                            Image
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="image" id="image" type="text" placeholder="image">
                        </div>
                    </div>

                <div class="-mx-3 md:flex mb-2">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="platform">
                        Platform*
                        </label>
                    <div>
                        <select class="form-control w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="platform_id" id="platform_id">
                            <option>Select Platform</option>
                            @foreach ($ranking as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id == 1) ? 'selected' : '' }}> {{ $item->name }} </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="platform">
                        Genre*
                        </label>    
                    <div>
                      <select class="form-control w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="genre_id" id="genre_id">
                            <option>Select Genre</option>
                            @foreach ($genres as $items)
                            <option value="{{ $items->id }}" {{ ( $items->id == 1) ? 'selected' : '' }}> {{ $items->name }} </option>
                            @endforeach
                        </select>
                    </div>        
                </div>
            <div class="md:w-1/2 px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" form="pegi">
                Pegi
                </label>
                <div>
                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="pegi" id="pegi">
                        <option>3</option>
                        <option>7</option>
                        <option>12</option>
                        <option>16</option>
                        <option>18</option>

                    </select>
                </div>
            </div>
        </div>

                <div class="-mx-3 md:flex mt-2">
                    <div class="md:w-full px-10">
                        <a href="/admin/dashboard/ranking" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                            Back
                        </a>
                    </div>
                    <div class="md:w-full px-10">
                        <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                        Send
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @else
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="bg-red-400 h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/PublicList">Global list</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/rankingUser">Ranking Games</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/MyList">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/profiles">Profile</a></li>

            </ul>
        </div>
        <div class="w-2/3 mx-auto">
        <h1 class="text-center text-green-600 text-5xl font-bold"> Create Game </h1>
        <form method="POST" action="{{ route('rankingUser.store') }}">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">
                        Name Game*
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"name="name" id="name" type="text" placeholder="Name">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="developer">
                        Developer
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="developer" id="developer" type="text" placeholder="Developer">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="director">
                        Director
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="director" id="director" type="text" placeholder="Director">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                        Publisher
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="publisher" id="publisher" type="text" placeholder="Publisher">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="date">
                        Date*
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="date" id="date" type="date" placeholder="Date">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                        Sumary
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="summary" id="summary" type="text" placeholder="Summary">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                        Page Referent
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="page_reference" id="page_reference" type="text" placeholder="Page_reference">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="sage">
                        Saga
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="saga" id="saga" type="text" placeholder="Saga">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                        Image
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" name="image" id="image" type="text" placeholder="image">
                    </div>
                </div>
               <div class="-mx-3 md:flex mb-2">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="platform">
                        Platform*
                        </label>
                    <div>
                        <select class="form-control w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="platform_id" id="platform_id">
                            <option>Select Platform</option>
                            @foreach ($rankingUser as $item)
                            <option value="{{ $item->id }}" {{ ( $item->id == 1) ? 'selected' : '' }}> {{ $item->name }} </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="platform">
                        Genre*
                        </label>    
                    <div>
                      <select class="form-control w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="genre_id" id="genre_id">
                            <option>Select Genre</option>
                            @foreach ($genres as $items)
                            <option value="{{ $items->id }}" {{ ( $items->id == 1) ? 'selected' : '' }}> {{ $items->name }} </option>
                            @endforeach
                        </select>
                    </div>        
                </div>
            <div class="md:w-1/2 px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" form="pegi">
                Pegi
                </label>
                <div>
                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="pegi" id="pegi">
                        <option>3</option>
                        <option>7</option>
                        <option>12</option>
                        <option>16</option>
                        <option>18</option>

                    </select>
                </div>
            </div>
        </div>
        <div class="-mx-3 md:flex mt-2">

            <div class="md:w-full px-10">
            <a href="/dashboard/rankingUser" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                    Back
            </a>
            </div>
            <div class="md:w-full px-10">
                        <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                        Send
                        </button>
                    </div>
        </div>
      </div>
        </form>
    </div>
</div>    
    </div>
    @endif
</x-app-layout>