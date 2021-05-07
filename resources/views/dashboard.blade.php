<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection
    <div class="options p-10 text-center mx-2 space-y-2">
    <h1 class="text-green-600 text-5xl font-bold"> 
        Control Panel 
    </h1>
    <div class="px-6 py-4 grid grid-rows-3 grid-flow-col gap-2 gap-3 p-4"> 
        <a href="/admin/dashboard/ranking" class="text-3xl transition duration-75 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Ranking
        </a>
        <a href="/admin/dashboard/list" class="text-3xl transition duration-100 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Listes
        </a>
        <a href="/admin/dashboard/request" class="text-3xl transition duration-500 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Request
        </a>
        <a href="/admin/dashboard/frient"  class="text-3xl transition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
           Friend
        </a>
        <a href="/admin/dashboard/profile" class="text-3xl transition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Profile
        </a>
    </div> 
    </div>
    @else
    <!-- @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection -->
    <div class="options p-10 text-center mx-2 space-y-2">
    <h1 class="text-green-600 text-5xl font-bold"> 
        Control Panel 
    </h1>
    <div class="px-6 py-4 grid grid-rows-3 grid-flow-col gap-2 gap-3 p-4"> 
        <a href="/admin/dashboard/ranking" class="text-3xl transition duration-75 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Ranking
        </a>
        <a href="/admin/dashboard/list" class="text-3xl transition duration-100 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Listes
        </a>
        <a href="/admin/dashboard/petition" class="text-3xl transition duration-500 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Petition
        </a>
        <a href="/admin/dashboard/frient"  class=" text-3xltransition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
           Friend
        </a>
        <a href="/admin/dashboard/profile" class="text-3xl transition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Profile
        </a>
    </div> 
    </div>
    @endif

</x-app-layout>
