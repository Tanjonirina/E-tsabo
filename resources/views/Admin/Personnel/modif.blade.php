@extends('Layouts.AdminLayouts')
@section('body')

<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    @include('Admin.partials.Sidebar')
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        @include('Admin.partials.Navbar')
        <!-- Navbar End -->


        <!-- forme -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Personnel Form</h6>
                    <form action="{{route('Personnels.update',$personnel->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="d-flex">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="exampleInputEmail1" class="form-label">Matricule</label>
                                    <input type="text" class="form-control"
                                        name="matricule" value="{{$personnel->Matricule}}">
                                </div>
                                </div>
                                <div class="mb-3  ">
                                    <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Nom</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="nom" value="{{$personnel->nom}}" style="margin-left: 10px">
                                </div>
                                <div class="mb-3 ">
                                    <label for="exampleInputEmail1" class="form-label" style="margin-left: 20%">prenom</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$personnel->prenom}}"
                                        aria-describedby="emailHelp" name="prenom" style="width: 300px; margin-left: 10%; margin-right: 80px;">
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="col">
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label">télephone</label>
                                        <input type="text" class="form-control" value="{{$personnel->telephone}}"
                                            name="telephone">
                                    </div>
                                    </div>
                                    <div class="mb-3  ">
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" value="{{$personnel->email}}"
                                            aria-describedby="emailHelp" name="email" style="margin-left: 10px" >
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 20%">CIN</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$personnel->cin}}"
                                            aria-describedby="emailHelp" name="cin" style="width: 300px; margin-left: 10%; margin-right: 80px;">
                                    </div>
                                </div>


                                <div class="d-flex">
                                    <div class="col">
                                        <div class="mb-3 ">
                                            <label for="exampleInputEmail1" class="form-label">Poste</label>
                                            <input type="text" class="form-control" value="{{$personnel->post}}"
                                                name="poste">
                                        </div>
                                        </div>
                                        <div class="mb-3  ">
                                            <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Date d'ambauche</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$personnel->date_Ambauche}}"
                                                aria-describedby="emailHelp" name="email" style="margin-left: 10px" >
                                        </div>
                                        <div class="mb-3 ">
                                            <select class="form-select " style="width: 300px; margin-left: 10%; margin-right: 80px; margin-top: 30px" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option value="{{$personnel->departement->id}}">{{$personnel->departement->Designations}}</option>
                                            @foreach ($departement as $departements )

                                                <option value="{{$departements->id}}">{{$departements->Designations}}</option>
                                            @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        @if($personnel->image)
                                        <label for="">Nom de l'image actuelle : {{ $personnel->image }}</label>
                                        <br>
                                        <label for="">Nouvelle image (laissez vide pour conserver l'image actuelle)</label>
                                        <input type="file" name="image">
                                    @else
                                        <label for="">Image</label>
                                        <input type="file" name="image">
                                    @endif

                                    @error('image')
                                        <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                    @enderror
                                    <div class="col-md-6">
                                        @if($personnel->image)
                                            <img src="{{ asset('image/' . $personnel->image) }}" alt="Person Image" width="150">
                                        @endif
                                    </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width: 200px; height: auto; margin-left: 40%;;">Modifier</button>
                                </div>



                          </div>

                        </div>




                    </form>
                </div>
            </div>
        </div>
        <!-- forme -->

    </div>
    <!-- Content End -->




</div>
@endsection()
