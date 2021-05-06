<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Auth::user()->role == 'admin')
    @section('breadcrumbs')
        {{ Breadcrumbs::render('Ranking') }}
    @endsection
    <script src="{{asset('js/breadcrumb.js')}}"></script>
  <div class="p-3 mb-10">
  <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="/admin/dashboard/rankingGame" method="GET" role="search">
                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                        <a href="/admin/dashboard/rankingGame" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
    @else
    @section('breadcrumbs')
        {{ Breadcrumbs::render('Ranking') }}
    @endsection
    <script src="{{asset('js/breadcrumb.js')}}"></script>
  <div class="p-3 mb-10">
  <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="/admin/dashboard/rankingGame" method="GET" role="search">
                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                        <a href="/admin/dashboard/rankingGame" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
    @endif
</x-app-layout>
