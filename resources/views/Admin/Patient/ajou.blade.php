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
                    <form>
                        <div class="row">
                          <div class="d-flex">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                                    <input type="text" class="form-control"
                                        name="nom">
                                </div>
                                </div>
                                <div class="mb-3  ">
                                    <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Prenom</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="Prenom" style="margin-left: 10px">
                                </div>
                                <div class="mb-3 ">
                                    <label for="exampleInputEmail1" class="form-label" style="margin-left: 20%">Date de naissance</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="Date_denaissance" style="width: 300px; margin-left: 10%; margin-right: 80px;">
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="col">
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label">Âge</label>
                                        <input type="text" class="form-control"
                                            name="age">
                                    </div>
                                    </div>
                                    <div class="mb-3  ">
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Adresse</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="adresse" style="margin-left: 10px" >
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 20%">Contact</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="contact" style="width: 300px; margin-left: 10%; margin-right: 80px;">
                                    </div>
                            </div>

                            <div class="d-flex">
                                <div class="col">
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control"
                                            name="email">
                                    </div>
                                    </div>
                                    <div class="mb-3  ">
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Nationalité</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="nationalite" style="margin-left: 10px" >
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 20%">Maladie</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="maladie" style="width: 300px; margin-left: 10%; margin-right: 80px;">
                                    </div>
                            </div>

                            <div class="d-flex">
                                <div class="col">
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label">Nom de famiel</label>
                                        <input type="text" class="form-control"
                                            name="nomF">
                                    </div>
                                    </div>
                                    <div class="mb-3  ">
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 10px">Adresse Famile</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="adresseF" style="margin-left: 10px" >
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 20%">Date d'etre</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="dateE" style="width: 300px; margin-left: 10%; margin-right: 80px;">
                                    </div>
                            </div>
                            <div class="flex">
                                <div class="mb-3">
                                    <label for="">Image</label>
                                <input type="file" name="" id="">

                                </div>

                            </div>






                                <div class="d-flex">

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
