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
            Global Rankings
        </a>
        <a href="/admin/dashboard/publicList" class="text-3xl transition duration-100 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Public Lists
        </a>
        <a href="/admin/dashboard/myList" class="text-3xl transition duration-100 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            My Lists
        </a>
        <a href="/admin/dashboard/requests" class="text-3xl transition duration-500 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Requests
        </a>
        <a href="/admin/dashboard/frient"  class="text-3xl transition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
           Friends
        </a>
        <a href="/admin/dashboard/profile" class="text-3xl transition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Profiles
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
        <a href="/dashboard/ranking" class="text-3xl transition duration-75 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Global Rankings
        </a>
        <a href="/dashboard/publiList" class="text-3xl transition duration-100 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Public Lists
        </a>
        <a href="/dashboard/myList" class="text-3xl transition duration-100 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            My Lists
        </a>
        <a href="/dashboard/petition" class="text-3xl transition duration-500 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Petitions
        </a>
        <a href="/dashboard/frient"  class=" text-3xl transition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
           Friends
        </a>
        <a href="/dashboard/profile" class="text-3xl transition duration-1000 ease-in-out 
                       bg-green-300 hover:bg-green-600 transform 
                       hover:-translate-y-1 hover:scale-100 
                       rounded-lg p-4 border border-green-900">
            Profiles
        </a>
    </div> 
    </div>
    @endif

</x-app-layout>
