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
                    <h6 class="mb-4">Basic Form</h6>
                    <form action="{{route('Personnels.Ajou')}}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row">
                          <div class="d-flex">
                            <div class="col">
                                <div class="mb-3 ">
                                    @error('matricule')
                                    <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1" class="form-label">Matricule</label>
                                    <input type="text" class="form-control"
                                        name="matricule">
                                </div>
                                </div>
                                <div class="mb-3  ">
                                    @error('nom')
                                    <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Nom</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="nom" style="margin-left: 10px">
                                </div>
                                <div class="mb-3 ">
                                    @error('prenom')
                                    <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1" class="form-label" style="margin-left: 20%">prenom</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="prenom" style="width: 300px; margin-left: 10%; margin-right: 80px;">
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="col">
                                    <div class="mb-3 ">
                                        @error('telephone')
                                    <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                    @enderror
                                        <label for="exampleInputEmail1" class="form-label">télephone</label>
                                        <input type="text" class="form-control"
                                            name="telephone">
                                    </div>
                                    </div>
                                    <div class="mb-3  ">
                                        @error('email')
                                    <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                    @enderror
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="email" style="margin-left: 10px" >
                                    </div>
                                    <div class="mb-3 ">
                                        @error('cin')
                                    <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                    @enderror
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 20%">CIN</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="cin" style="width: 300px; margin-left: 10%; margin-right: 80px;">
                                    </div>
                                </div>


                                <div class="d-flex">
                                    <div class="col">
                                        <div class="mb-3 ">
                                            @error('poste')
                                            <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                            @enderror
                                            <label for="exampleInputEmail1" class="form-label">Poste</label>
                                            <input type="text" class="form-control"
                                                name="poste">
                                        </div>
                                        </div>
                                        <div class="mb-3  ">
                                            @error('dateA')
                                            <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                            @enderror
                                            <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Date d'ambauche</label>
                                            <input type="date" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="dateA" style="margin-left: 10px" >
                                        </div>
                                        <div class="mb-3 ">
                                            @error('select')
                                            <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                            @enderror
                                            <select class="form-select " style="width: 300px; margin-left: 10%; margin-right: 80px; margin-top: 30px" id="floatingSelect"
                                            aria-label="Floating label select example" name="select">
                                            @foreach ($departement as $departements )
                                            <option value="{{$departements->id}}">{{$departements->Designations}}</option>
                                            @endforeach
                                            </select>

                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        @error('image')
                                        <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                        @enderror
                                        <label for="">Image</label>
                                        <input type="file" name="image">

                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width: 200px; height: auto; margin-left: 40%;;">Ajouteur</button>
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
