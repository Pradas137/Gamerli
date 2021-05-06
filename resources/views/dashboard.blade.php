@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard') }}
@endsection
<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="grid grid-rows-2 grid-flow-col gap-8">
            <a href="/dashboard/requests" class="bg-red-500 text-center font-extrabold rounded-sm text-base rounded-lg m-10 h-12"> Requests</a>
            <a href="/dashboard/rankings" class="bg-red-500 text-center font-extrabold rounded-sm text-base rounded-lg m-10 h-12"> Rankings</a>
            <a href="/dashboard/profile" class="bg-red-500 text-center font-extrabold rounded-sm text-base rounded-lg m-10 h-12"> Profile</a>
            <a href="/dashboard/lists" class="bg-red-500  text-center font-extrabold rounded-sm text-base rounded-lg m-10 h-12"> Lists</a>
        </div>
        <form action="/admin/dashboard/Import" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @csrf
            <input type="file" name="file" id="file">
            <input type="text" name="req_enrol_id" value="1">
            <button class="btn primary-btn" type="submit">Submit</button>
        </form>
    </div>
    <script src="{{asset('js/breadcrumb.js')}}"></script>
</x-app-layout>