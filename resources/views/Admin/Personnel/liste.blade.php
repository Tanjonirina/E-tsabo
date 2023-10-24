<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <form action="{{route('Personnels.recherche')}}">
            <div class="form-group mb-0 mr-1 d-flex p-5" >
                <input type="text" name="recherche" class="form-control">
                <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> </button>
            </div>
        </form>

        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Listes Personnel</h6>
            <a href="{{route('Personnels.Ajout')}}"><i class="fa-solid fa-notes-medical"></i></a>
        </div>

        <div class="table-responsive">
            @include('sweetalert::alert')
            <table class="table text-start align-middle table-bordered table-hover mb-0">

                <thead>
                    <tr class="text-white">
                        <th scope="col">Matricule</th>
                        <th scope="col">Image</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Télephone</th>
                        <th scope="col">Email</th>
                        <th scope="col">CIN</th>
                        <th scope="col">Post</th>
                        <th scope="col">Ambauche</th>
                        <th scope="col">Départements</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($personnel as $Personnels )

                    <tr>
                        <td>{{$Personnels->id}}</td>
                        <td><img class="rounded-circle" style="width: 40px; height: 40px;" src="{{asset("image/". $Personnels->image)}}" alt="" srcset=""></td>
                        <td>{{$Personnels->nom}}</td>
                        <td>{{$Personnels->prenom}}</td>
                        <td>{{$Personnels->telephone}}</td>
                        <td>{{$Personnels->email}}</td>
                        <td>{{$Personnels->cin}}</td>
                        <td>{{$Personnels->post}}</td>
                        <td>{{$Personnels->date_Ambauche}}</td>
                        <td>{{$Personnels->departement->Designations}}</td>
                        <td>
                            <a class="btn btn-sm btn-warning me-2" href="{{route('Personnels.modif',$Personnels->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary me-2" href="{{route('Personnels.delet', $Personnels->id)}}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    @empty
                        <tr>
                            <th class="text-danger">Personnel est vide!</th>
                        </tr>
                    @endforelse





                </tbody>
            </table>
        </div>
    </div>
</div>
