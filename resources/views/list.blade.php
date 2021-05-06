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
  <div class="p-3 mb-10">
  <div>
       
  </div>
    @else
    <!-- @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection -->
    <script src="{{asset('js/breadcrumb.js')}}"></script>
  <div class="p-3 mb-10">
  <div>
       
  </div>
    @endif
</x-app-layout>
