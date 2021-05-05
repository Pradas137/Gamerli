@section('breadcrumbs')
  {{ Breadcrumbs::render('profile') }}
@endsection
<x-app-layout>
<script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="py-12">
        <div class="grid grid-rows-2 grid-flow-col gap-8">
           Profile
        </div>
    </div>
</x-app-layout>