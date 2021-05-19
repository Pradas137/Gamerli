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
          <li class="font-bolt mb-4"><a href="/admin/dashboard/adminPublicList">Global list</a></li>
          <li class="font-bolt mb-4"><a href="/admin/dashboard/ranking">Ranking</a></li>
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
            <h1 class="text-center text-green-600 text-5xl font-bold"> Show List Game </h1>
            <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
                <div class="p-4 md:p-12 text-center lg:text-left">
                    <form method="POST" action="{{ route('adminPublicList.store') }}" method="post" style="display: none" id="avatarForm">
                        {{ csrf_field() }}
                    </form>
                    <h1 id="name" class="text-3xl font-bold pt-8 lg:pt-0 text-black">Name List: {{ $list->name }}</h1>
                    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25 text-black"></div>
                    @foreach ( $list->games as $game)
                        <p class="pt-2 text-base font-bold flex items-center justify-center lg:justify-start text-black">Name: {{ $game->name }}</p>
                    @endforeach
                    </div>
                </div>
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
            <h1 class="text-center text-green-600 text-5xl font-bold"> Show List </h1>
            <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
                <div class="p-4 md:p-12 text-center lg:text-left">
                    <form method="POST" action="{{ route('PublicList.store') }}" method="post" style="display: none" id="avatarForm">
                        {{ csrf_field() }}
                        <input type="file" id="avatarInput" name="avatar">
                    </form>
                    <h1 id="name" class="text-3xl font-bold pt-8 lg:pt-0 text-black">Name List: {{ $list->name }}</h1>
                        <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25 text-black"></div>
                        @foreach ( $list->games as $game)
                                <p class="pt-2 text-base font-bold flex items-center justify-center lg:justify-start text-black">Name: {{ $game->name }}</p>
                        @endforeach
                        </div>
                        <div class="pt-3 pb-5">
                            <a href="/dashboard/MyList" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                                Atras
                            </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="userUpdate" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                        <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
                            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>