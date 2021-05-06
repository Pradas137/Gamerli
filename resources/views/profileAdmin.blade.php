<x-app-layout page="">
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
                    <p>{{ Auth::user()->avatar }}</p>
                </div>
                <div class="form-group grid sm:grid-cols-2">
                    <label for="state.email">Role</label>
                    <p>{{ Auth::user()->role }}</p>
                </div>
            </form>
            <div class="form-group pt-5">
                <label for="state.cambio">Solicitar cambios:</label>
                <textarea class="form-textarea border-black border-opacity-50 mt-1 block w-full " rows="3"></textarea>
            </div>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</x-app-layout>