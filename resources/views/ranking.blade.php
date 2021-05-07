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
        <div class="h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/list">Listes</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/ranking">Ranking</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/request">Request</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/comment">Comment</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Profile</a></li>
            </ul>
        </div>
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-10">Ranking</h1>
            <div class="p-3 mb-10">
                <div>
                    <div class="mx-auto pull-right">
                        <div class="">
                            <form action="/admin/dashboard/rankingGame" method="GET" role="search">
                                <div class="input-group">
                                    <span class="input-group-btn mr-5 mt-1">
                                        <button class="btn btn-info" type="submit" title="Search projects">
                                            <span class="fas fa-search"></span>
                                        </button>
                                    </span>
                                    <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                                    <a href="/admin/dashboard/rankingGame" class=" mt-1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="button" title="Refresh page">
                                                <span class="fas fa-sync-alt"></span>
                                            </button>
                                        </span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="w-full border-2 border-mtr-dark table-auto">
                    <caption class="mb-4 text-4xl">Gamers</caption>
                    <thead>
                        <tr>
                            <th class="border-2 border-mtr-dark">Name</th>
                            <th class="border-2 border-mtr-dark">Genere</th>
                            <th class="border-2 border-mtr-dark">Developer</th>
                            <th class="border-2 border-mtr-dark">Director</th>
                            <th class="border-2 border-mtr-dark">GConsoles</th>
                            <th class="border-2 border-mtr-dark">Date</th>
                            <th class="border-2 border-mtr-dark">Pegi</th>
                            <th class="border-2 border-mtr-dark">Publisher</th>
                            <th class="border-2 border-mtr-dark">Summary</th>
                            <th class="border-2 border-mtr-dark">Page Refernce</th>
                            <th class="border-2 border-mtr-dark">Image</th>
                            <th class="border-2 border-mtr-dark">Comment</th>
                        </tr>
                    </thead>
                <tbody> 
                
                </tbody>
            </table>
        </div>
    </div>
    @else
    @section('breadcrumbs')
        {{ Breadcrumbs::render('Ranking') }}
    @endsection
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/list">Listes</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/ranking">Ranking</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/request">Request</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/comment">Comment</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Profile</a></li>
            </ul>
        </div>
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-10">Ranking</h1>
                <div class="p-3 mb-10">
                    <div>
                        <div class="mx-auto pull-right">
                            <div class="">
                                <form action="/admin/dashboard/rankingGame" method="GET" role="search">
                                    <div class="input-group">
                                        <span class="input-group-btn mr-5 mt-1">
                                            <button class="btn btn-info" type="submit" title="Search projects">
                                                <span class="fas fa-search"></span>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                                        <a href="/admin/dashboard/rankingGame" class=" mt-1">
                                            <span class="input-group-btn">
                                                <button class="btn btn-danger" type="button" title="Refresh page">
                                                    <span class="fas fa-sync-alt"></span>
                                                </button>
                                            </span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="w-full border-2 border-mtr-dark table-auto">
                        <caption class="mb-4 text-4xl">Gamers</caption>
                        <thead>
                        <tr>
                            <th class="border-2 border-mtr-dark">Name</th>
                            <th class="border-2 border-mtr-dark">Genere</th>
                            <th class="border-2 border-mtr-dark">Developer</th>
                            <th class="border-2 border-mtr-dark">Director</th>
                            <th class="border-2 border-mtr-dark">GConsoles</th>
                            <th class="border-2 border-mtr-dark">Date</th>
                            <th class="border-2 border-mtr-dark">Pegi</th>
                            <th class="border-2 border-mtr-dark">Publisher</th>
                            <th class="border-2 border-mtr-dark">Summary</th>
                            <th class="border-2 border-mtr-dark">Page Refernce</th>
                            <th class="border-2 border-mtr-dark">Image</th>
                            <th class="border-2 border-mtr-dark">Comment</th>


                        </tr>
                        </thead>
                        <tbody> 
                        </tbody>
                    </table>
                </div>
            </div>
    @endif
</x-app-layout>
