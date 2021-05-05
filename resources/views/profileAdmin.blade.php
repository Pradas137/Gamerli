@section('breadcrumbs')
  {{ Breadcrumbs::render('profile') }}
@endsection
<x-app-layout>
<script src="{{asset('js/breadcrumb.js')}}"></script>
    <div class="flex h-screen">
        <div class="bg-red-300 p-6 w-64 boder-r border-gray-200">
          <h6 class="font-bold mb-4">Paginas</h6>
          <ul>
            <li class="flex mb-8">
              <a href="/admin/dashboard/rankings"class="selft-center">Ranking</a>
            </li>
            <li class="flex mb-8">
              <a href="/admin/dashboard/lists"class="selft-center">Lists</a>
            </li>
          </ul>
          <h6 class="font-bold mb-4">Acciones</h6>
          <ul>
          <li class="flex mb-8">
              <a href="/admin/dashboard/requests"class="selft-center">Solicitudes</a>
            </li>
            <li class="flex mb-8">
              <a href="/admin/dashboard/friends"class="selft-center">Amigos</a>
            </li>
          </ul>
        </div>
        <div class="p-6">
          texto
        </div>
    </div>
</x-app-layout>