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
                <li class="font-bolt mb-4"><a href="/admin/dashboard/request">Imports</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/myList">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Friend</a></li>
            </ul>
        </div>
        <div class="w-2/3 mx-auto">
            <h1 class="text-center text-green-600 text-5xl font-bold"> Edit Game </h1>
            <div class="p-4 md:p-12 text-center lg:text-left">
                <div class="w-full bg-white rounded shadow-lg p-8 m-4">
                    <form class="mb-2" id="formulario" method="POST" action="/admin/dashboard/profile" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="flex flex-col mb-1">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="first_name">Name</label>
                            <input class="border py-1 px-1 text-grey-darkest" type="text" name="name" id="name">
                        </div>
                        <br>
                        <br>
                        <div class="flex flex-col mb-1">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="first_name">Surname</label>
                            <input class="border py-2 px-3 text-grey-darkest" type="text" name="surname" id="surname">
                        </div>
                        <br>
                        <br>
                      <!--
                        <div class="flex flex-col mb-1">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image">Image</label>
                            <input class="border py-2 px-1 text-grey-darkest" type="file" name="avatar" id="avatar">
                        </div>-->
                        <input class="block bg-black hover:bg-teal-dark text-white uppercase text-lg mx-auto p-4 rounded" type="submit" value="Save"/>
                    </form>
                </div>
            </div>
        </div>
    @else
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="bg-gray-400 h-8 md:h-full border-r w-64 text-center border-gray-200">
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
            <h1 class="text-center text-green-600 text-5xl font-bold"> Edit Game </h1>
            <div class="p-4 md:p-12 text-center lg:text-left">
                <div class="w-full bg-white rounded shadow-lg p-8 m-4">
                    <form class="mb-2" id="formulario" method="POST" action="/dashboard/profiles" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="flex flex-col mb-1">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="first_name">Name</label>
                            <input class="border py-1 px-1 text-grey-darkest" type="text" name="name" id="name">
                        </div>
                        <br>
                        <br>
                        <div class="flex flex-col mb-1">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="first_name">Surname</label>
                            <input class="border py-2 px-3 text-grey-darkest" type="text" name="surname" id="surname">
                        </div>
                        <br>
                        <br><!--
                        <div class="flex flex-col mb-1">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image">Image</label>
                            <input class="border py-2 px-1 text-grey-darkest" type="file" name="avatar" id="avatar">
                        </div>-->
                        <input class="block bg-black hover:bg-teal-dark text-white uppercase text-lg mx-auto p-4 rounded" type="submit" value="Save"/>
                    </form>
                </div>
            </div>
        </div>
        @endif
</x-app-layout>