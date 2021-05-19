	<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(Auth::user()->role == 'admin')
    <div class=" max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
	<!--Main Col-->
		<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
			<div class="p-4 md:p-12 text-center lg:text-left">
				<form action="{{ url('/admin/dashboard/profile') }}" method="post" style="display: none" id="avatarForm">
					{{ csrf_field() }}
					<input type="file" id="avatarInput" name="avatar">
				</form>
				<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" src="{{asset('/images/logo2.png')}}" style="background-image: url('data:image/png;base64,{{ Auth::user()->avatar }}')">
				</div>
				<h1 id="name" class="text-3xl font-bold pt-8 lg:pt-0 text-black">{{ Auth::user()->name }}</h1>
				<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25 text-black"></div>
				<p id="surname" class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start text-black">{{ Auth::user()->surname }}</p>
				<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start text-black">{{ Auth::user()->role }}</p>
				<p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start text-black">{{ Auth::user()->email }}</p>
				<p class="pt-8 text-sm">{{ Auth::user()->description }}</p>
				<div class="pt-4 pb-8">
					<a id="edit" class="btn btn-primary text-center inline-flex items-center px-4 py-2 bg-yellow-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="/admin/dashboard/profile/{{Auth::user()->id}}/edit">Edit</a>
				</div>
			</div>
		</div>
		<div class="w-full lg:w-2/5">
			<img class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block" src="{{asset('/images/logo2.png')}}" style="background-image: url('data:image/png;base64,{{ Auth::user()->avatar }}')">		
		</div>
		<div class="modal fade" id="userUpdate" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
			<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
			<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"></div>
		</div>
	</div>
    @else
    <script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
	<!--Main Col-->
	<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
		<div class="p-4 md:p-12 text-center lg:text-left">
            <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('data:image/png;base64,{{ Auth::user()->avatar }}')">
            </div>
			<h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ Auth::user()->name }}</h1>
			<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
			<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">{{ Auth::user()->surname }}</p>
			<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">{{ Auth::user()->role }}</p>
			<p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start">{{ Auth::user()->email }}</p>
			<p class="pt-8 text-sm">{{ Auth::user()->description }}</p>
			<div class="pt-5 pb-8">
				<a href="/dashboard/profiles/{{Auth::user()->id}}/edit" id="" class=" userEdits bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
				  Edit
        </a>
			</div>
			<!--Editar-->
			
			<!---------->
		</div>
	</div>
	<div class="w-full lg:w-2/5">
		<img class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block" src="data:image/png;base64,{{ Auth::user()->avatar }}">		
	</div>
</div>
    @endif
</x-app-layout>
<script src="{{asset('js/profile.js')}}"></script>