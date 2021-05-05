@section('breadcrumbs')
  {{ Breadcrumbs::render('Friend') }}
@endsection
<x-app-layout>
<script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="py-12">
        <div class="grid grid-rows-2 grid-flow-col gap-8">
           Friend
        </div>
    </div>
</x-app-layout>