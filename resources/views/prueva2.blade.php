<x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-app-layout page="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="terms">
        <p class="text">
            <span class="red">*</span>
            Per veure els cicles del curs selecciona el nom del curs
            <span class="red">*</span>
        </p>
        <table>
            <caption>Llistat de cursos</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Descripció</th>
                    <th>Data d'inici</th>
                    <th>Data de fi</th>
                    <th>Creació</th>
                    <th>Darrera modificació</th>
                    <th>Edita</th>
                    <th>Elimina</th>
                    <th>Clonar</th>
                </tr>
            </thead>
            <tbody style="display: none">
                <tr>
                    <td colspan="10" class="loading inverted"></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Descripció</th>
                    <th>Data d'inici</th>
                    <th>Data de fi</th>
                    <th>Creació</th>
                    <th>Darrera modificació</th>
                    <th>Edita</th>
                    <th>Elimina</th>
                    <th>Clonar</th>
                </tr>
            </tfoot>
        </table>
        <div class="bg-dialog"></div>
        <div class="modal-term dis-none" title="Nou Curs">
            <div class="label-group">
                <label for="name">Nom: <span class="red">*</span></label>
                <input type="text" id="name" class="input">
            </div>
            <div class="label-group">
                <label for="description">Descripció: <span class="red">*</span></label>
                <input type="text" id="description" class="input">
            </div>
            <div class="row">
                <div class="label-group">
                    <label for="start">Data d'inici: <span class="red">*</span></label>
                    <input type="text" id="start" class="input">
                </div>
                <div class="label-group">
                    <label for="end">Data de fi: <span class="red">*</span></label>
                    <input type="text" id="end" class="input">
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
