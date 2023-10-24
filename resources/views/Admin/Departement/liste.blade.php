
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Liste Departement</h6>
                    <a href="{{route('departement.Ajou')}}"><i class="fa-solid fa-notes-medical"></i></a>
                </div>
                @include('sweetalert::alert')
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($departement as $departements )
                        <tr>
                            <th scope="row">{{$departements->id}}</th>
                            <td>{{$departements->Designations}}</td>
                            <td>
                                <a class="btn btn-sm btn-warning me-2" href="{{route('departement.show', $departements->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary me-2" href="{{route('departement.delete', $departements->id)}}"><i class="fa-solid fa-trash"></i></a>
                            </td>

                        </tr>

                        @empty
                        <tr>
                            <th>Aucun departement ajouté</th>
                        </tr>

                        @endforelse

                    </tbody>
                </table>

            </div>


    </div>
</div>
