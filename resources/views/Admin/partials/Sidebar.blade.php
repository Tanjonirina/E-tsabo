<div class="sidebar pe-4 pb-3">
    <nav class="navbar  navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fas fa-syringe me-2"></i>E-tsabo</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset("Asset/image/1818.jpg")}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-danger rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3 text-white ml-3 items-center">
                <h6 class="mb-0 ">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('Admin')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-nurse me-2"></i>Personnels</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('Personnels.liste')}}" class="dropdown-item">Liste </a>
                    <a href="{{route('Personnels.Ajout')}}" class="dropdown-item">Ajouter</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bed-pulse me-2 me-2"></i>Patients</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('Patient.liste')}}" class="dropdown-item">Liste </a>
                    <a href="{{route('Patient.Ajou')}}" class="dropdown-item">Ajouter</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-hospital me-2"></i>Departements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('departement.liste')}}" class="dropdown-item">Liste </a>
                    <a href="{{route('departement.Ajou')}}" class="dropdown-item">Ajouter</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-server me-2"></i>Service</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('Service.liste')}}" class="dropdown-item">Liste </a>
                    <a href="{{route('service.Ajou')}}" class="dropdown-item">Ajouter</a>

                </div>
            </div>
            <a href="{{route('tranfert.liste')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>transfère</a>


        </div>
    </nav>
</div>
