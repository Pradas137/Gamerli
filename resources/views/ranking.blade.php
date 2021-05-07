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
                <li class="font-bolt mb-4"><a href="/admin/dashboard/request">Request</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/comment">Comment</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
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
        <div class="h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard/list">Listes</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/request">Request</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/comment">Comment</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/friend">Friend</a></li>
            </ul>
        </div>
        <div>
            <div class="col-md-h">
            <form action="/ranking" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control">
                <span class="form-group-btn">
                    <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</button>
                </span>
            </form>
        </div>
    </div>
    @endif
</x-app-layout>
