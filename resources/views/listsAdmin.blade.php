@section('breadcrumbs')
  {{ Breadcrumbs::render('list') }}
@endsection
<x-app-layout>
<script src="{{asset('js/breadcrumb.js')}}"></script>
    <!-- Don't forget to include the Tailwind css file -->
    
</x-app-layout>