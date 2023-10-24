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


        <!-- dashboard -->
           @include('Admin.Contents.dashboard')
        <!-- dashboard -->


        <!-- Sales Chart Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <a href="{{route('Personnels.liste')}}">
                        <div class="profile-card">
                            <div class="profile-img">
                                <img src="{{asset('Asset/image/close-up-african-american-hand-holding-stethoscope.jpg')}}" alt="Team Image"/>
                            </div>
                            <div class="profile-content">
                                <h2 class="title">Géré les
                                    <span>Personnels</span>
                                </h2>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="{{route('Patient.liste')}}">
                        <div class="profile-card">
                            <div class="profile-img">
                                <img src="{{asset('Asset/image/3d-render-medical-stethoscope-pen-tool-created-clipping-path-included-jpeg-easy-composite.jpg')}}" alt="Team Image"/>
                            </div>
                            <div class="profile-content">
                                <h2 class="title">Géré Les
                                    <span>Patients</span>
                                </h2>

                            </div>
                        </div>
                   </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="">
                    <div class="profile-card">
                        <div class="profile-img">

                            <img src=" {{asset("Asset/image/pexels-blue-arauz-17809395.jpg")}}" alt="Team Image"/>
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Service/
                                <span>secours</span>
                            </h2>

                        </div>
                    </div>
                   </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="{{route('departement.liste')}}">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="{{asset("Asset/image/tracking-computing-talk-lens-flare-close-up.jpg")}}" alt="Team Image"/>
                                </div>
                                <div class="profile-content">
                                    <h2 class="title">Departement
                                        <span>Designer & Developer</span>
                                    </h2>
                                </div>
                            </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Sales Chart End -->




    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection()
