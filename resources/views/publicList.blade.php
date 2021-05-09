<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
    @section('breadcrumbs')
        {{ Breadcrumbs::render('List') }}
    @endsection
    <div class="flex h-screen">
        <div class="bg-gray-400 h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/ranking">Ranking Game</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/request">My Request</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/mylist">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/admin/dashboard/friend">Friend</a></li>
            </ul>
        </div>
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-10">List</h1>
        <div>    
    </div>
    @else
    @section('breadcrumbs')
        {{ Breadcrumbs::render('List') }}
    @endsection
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="h-8 md:h-full border-r w-64 text-center border-gray-200">
            <h6 class="font-bold mb-4 text-2xl">PAGE</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard">Home</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/ranking">Rankings Global</a></li>
            <ul>
            <h6 class="font-bold mb-4 text-2xl">ADMIN</h6>
            <ul>
                <li class="font-bolt mb-4"><a href="/dashboard/request">My Request</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/mylist">My Lists</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/profile">Profile</a></li>
                <li class="font-bolt mb-4"><a href="/dashboard/friend">Friend</a></li>

            </ul>
        </div>
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-10">List</h1>
        <div>    
    </div>
    @endif
</x-app-layout>
