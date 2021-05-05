@section('breadcrumbs')
  {{ Breadcrumbs::render('ranking') }}
@endsection
<x-app-layout>
<script src="{{asset('js/breadcrumb.js')}}"></script>
  <div class="text-center">
    <button type="button" id="importStudent" class="m-3 bg-mtr-dark p-1 w-4/12 text-center font-extrabold rounded-sm text-base">Añadir Juegos</button>
  </div>
  <div class="p-3 mb-10">
      <table class="w-full border-2 border-mtr-dark table-auto">
        <caption class="mb-4 text-4xl">Gamers</caption>
        <thead>
          <tr>
            <th class="border-2 border-mtr-dark">Name</th>
            <th class="border-2 border-mtr-dark">Genere</th>
            <th class="border-2 border-mtr-dark">Developer</th>
            <th class="border-2 border-mtr-dark">Director</th>
            <th class="border-2 border-mtr-dark">GConsoles</th>
            <th class="border-2 border-mtr-dark">Date</th>
            <th class="border-2 border-mtr-dark">Pegi</th>
            <th class="border-2 border-mtr-dark">Publisher</th>
            <th class="border-2 border-mtr-dark">Summary</th>
            <th class="border-2 border-mtr-dark">Page Refernce</th>
            <th class="border-2 border-mtr-dark">Image</th>
            <th class="border-2 border-mtr-dark">Comment</th>


          </tr>
        </thead>
        <tbody> 
        </tbody>
      </table>
  </div>
  <!--<script src="{{asset('js/studentcrud.js')}}"></script>-->
</x-app-layout>
