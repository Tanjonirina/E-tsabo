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
                            <h6 class="mb-4">Departement</h6>
                            <form action="{{route('departement.update',$departement->id)}}" method="POST">
                                @csrf
                                @method("PUT")

                                @error('nom')
                                <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Departement</label>
                                    <input type="text" value="{{$departement->Designations}}" class="form-control input-rounded" placeholder="" name="nom" >
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary" style="margin: 20px;">Mettre a jours</button>
                            </form>
                        </div>


            </div>
        </div>
        <!-- forme -->

    </div>
    <!-- Content End -->




</div>
@endsection()
