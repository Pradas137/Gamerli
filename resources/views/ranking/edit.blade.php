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
          <li class="font-bolt mb-4"><a href="/admin/dashboard/adminPublicList">Public List</a></li>
        <ul>
        <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
        <ul>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/request">Imports</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/adminMyList">My Lists</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Friend</a></li>
        </ul>
      </div>
        <div class="w-2/3 mx-auto">
            <h1 class="text-center text-green-600 text-5xl font-bold"> Edit Game </h1>
            <form action="{{ route('ranking.update',$ranking->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">
                            Name Game*
                            </label>
                            <input type="text" name="name" value="{{ $ranking->name }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="developer">
                            Developer
                            </label>
                            <input type="text" name="developer" value="{{ $ranking->developer }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="director">
                            Director
                            </label>
                            <input type="text" name="director" value="{{ $ranking->director }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                            Publisher
                            </label>
                            <input type="text" name="publisher" value="{{ $ranking->publisher }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="date">
                            Date*
                            </label>
                            <input type="date" name="date" value="{{ $ranking->date }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                            Sumary
                            </label>
                            <input type="text" name="summary" value="{{ $ranking->summary }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="publisher">
                            Page Referent
                            </label>
                            <input type="text" name="page_referent" value="{{ $ranking->page_referent }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="sage">
                            Saga
                            </label>
                            <input type="text" name="saga" value="{{ $ranking->saga }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                            Image
                            </label>
                            <input type="text" name="image" value="{{ $ranking->image }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">

                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="summary">
                            Pegi
                            </label>
                            <input type="text" name="pegi" value="{{ $ranking->pegi }}" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 form-control">
                        </div>
                        <div class="md:w-1/2 px-3">
                            <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                            Button
                            </button>
                            <button href="/admin/dashboard/ranking" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                            Back
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @else
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="bg-gray-400 text-black h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/PublicList">Global list</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/rankingUser">Ranking Games</a></li>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard/MyList">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/profiles">Profile</a></li>
            </ul>
        </div>
        @endif
</x-app-layout>