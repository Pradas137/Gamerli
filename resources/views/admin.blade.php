@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard') }}
@endsection
<x-app-layout>
    <div class="py-12">
        <div class="grid grid-rows-2 grid-flow-col gap-8">
            <a href="/admin/dashboard/ranking" class="bg-red-500 text-center font-extrabold rounded-sm text-base rounded-lg m-5 h-10"> Rankings</a>
            <a href="/admin/dashboard/profile" class="bg-red-500 text-center font-extrabold rounded-sm text-base rounded-lg m-5 h-10"> Profile</a>
            <a href="/admin/dashboard/lists" class="bg-red-500  text-center font-extrabold rounded-sm text-base rounded-lg m-5 h-10"> Lists</a>
            <a href="/admin/dashboard/profile" class="bg-red-500 text-center font-extrabold rounded-sm text-base rounded-lg m-5 h-10"> Friend</a>
        </div>
    </div>
    <script src="{{asset('js/breadcrumb.js')}}"></script>
</x-app-layout>