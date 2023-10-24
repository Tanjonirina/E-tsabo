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
    <div class="bg-secondary text-center rounded p-4">

            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Liste Departement</h6>
                    <a href="{{route('tranfert.liste')}}"><i class="fa-solid fa-notes-medical"></i></a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom Patient</th>
                            <th scope="col">Nom personnel</th>
                            <th scope="col">Motif</th>
                            <th scope="col">lieux de transfert</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>John</td>
                            <td>Jmc</td>
                            <td>idP</td>
                            <td>Active</td>
                            <td>
                                <a class="btn btn-sm btn-warning me-2" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>


                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>John</td>
                            <td>Jmc</td>
                            <td>idP</td>
                            <td>Active</td>
                            <td>
                                <a class="btn btn-sm btn-warning me-2" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>



                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>John</td>
                            <td>Jmc</td>
                            <td>idP</td>
                            <td>Active</td>
                            <td>
                                <a class="btn btn-sm btn-warning me-2" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

    </div>
</div>

        <!-- forme -->

    </div>
    <!-- Content End -->




</div>
@endsection()
