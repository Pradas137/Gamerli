<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('breadcrumbs')
        {{ Breadcrumbs::render('profile') }}
    @endsection
    <div class="container-form-user p-10">
        <div class="card-body">
            <form role="form">
                <div class="form-group grid sm:grid-cols-2">
                    <label for="state.nom">NOM</label>
                    <p>{{ Auth::user()->name }}</p>
                </div>
                
                <div class="form-group grid sm:grid-cols-2">
                    <label for="state.cognom">COGNOM</label>
                    <p>{{ Auth::user()->surname }}</p>
                </div>

                <div class="form-group grid sm:grid-cols-2">
                    <label for="state.email">EMAIL</label>
                    <p>{{ Auth::user()->email }}</p>
                </div>
                <div class="form-group grid sm:grid-cols-2">
                    <label for="state.email">DESCRIPTION</label>
                    <p>{{ Auth::user()->profiledescription }}</p>
                </div>
                <div class="form-group grid sm:grid-cols-2">
                    <label for="state.email">AVATAR</label>
                    <img src="data:image/png;base64,{{ Auth::user()->avatar }}">
                </div>
                <div class="form-group grid sm:grid-cols-2">
                    <label for="state.email">Role</label>
                    <p>{{ Auth::user()->role }}</p>
                </div>
            </form>
            <form id="formulario" method="POST" action="/dashboard/profileUser" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                <label>SUBIR AVATAR</label>
                <input type="file" name="images">
                <input type="submit" value="save">
            </form>
        </div>
    </div>
</x-app-layout>