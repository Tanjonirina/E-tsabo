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
                                    <label for="exampleInputEmail1" class="form-label">Numéro d'imatriculation</label>
                                    <input type="text" class="form-control"
                                        name="nom">
                                </div>
                                </div>
                                <div class="mb-3  ">

                                    <select class="form-select " style="width: 300px; margin-left: 10%; margin-right: 80px; margin-top: 30px" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected>Disponibilité</option>
                                            <option value="1">Actif</option>
                                            <option value="2">non Actif</option>

                                            </select>
                                </div>
                                <div class="mb-3 ">
                                    <label for="exampleInputEmail1" class="form-label" style="margin-left: 20%">Marque</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="Date_denaissance" style="width: 300px; margin-left: 10%; margin-right: 80px;">
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="col">



                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label" style="margin-left: 0%">Contact</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="Contact" style="width: 300px; margin-left: 0%; margin-right: 80px;">
                                    </div>
                                    <div class="mb-3 ">
                                        <button type="submit" class="btn btn-primary" style="width: 200px; height: 50px; margin-left: 40%;;">Ajouteur</button>
                                    </div>
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
