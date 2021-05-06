<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('breadcrumbs')
        {{ Breadcrumbs::render('profileUser') }}
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
            </form>
            <div class="form-group pt-5">
                <label for="state.cambio">Solicitar cambios:</label>
                <textarea class="form-textarea border-black border-opacity-50 mt-1 block w-full " rows="3"></textarea>
            </div>
            <div class="label-group-admin grid justify-end pt-5">
                <a href="" class="btn primary-btn">Solicitar Cambios</a>
            </div>
        </div>
    </div>
</x-app-layout>