@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard') }}
@endsection
<x-app-layout>
    <div class="py-12">
        <div class="grid grid-rows-2 grid-flow-col gap-8">
            <a href="/admin/dashboard/requests" class="bg-red-500 text-center font-extrabold rounded-sm text-base rounded-lg m-10 h-12"> Requests</a>
            <a href="/admin/dashboard/rankings" class="bg-red-500 text-center font-extrabold rounded-sm text-base rounded-lg m-10 h-12"> Rankings</a>
            <a href="/admin/dashboard/profiles" class="bg-red-500 text-center font-extrabold rounded-sm text-base rounded-lg m-10 h-12"> Profile</a>
            <a href="/admin/dashboard/lists" class="bg-red-500  text-center font-extrabold rounded-sm text-base rounded-lg m-10 h-12"> Lists</a>
        </div>
    </div>
    <script src="{{asset('js/breadcrumb.js')}}"></script>
</x-app-layout>