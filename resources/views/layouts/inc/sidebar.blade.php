<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav-collapse-main" aria-controls="sidenav-collapse-main" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <span class="ms-5 font-weight-bold text-white">Admin Panel</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active bg-gradient-primary':'' }} ">
                <a class="nav-link text-white " href="dashboard">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">Dashboard</i>
                    </div>
                </a>
            </li>
            <li class="nav-item {{ Request::is('sliders') ? 'active bg-gradient-primary':'' }} ">
                <a class="nav-link text-white" href="{{ url('/sliders') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">Sliders</i>
                    </div>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-slider') ? 'active bg-gradient-primary':'' }}">
                <a class="nav-link text-white " href="{{ url('/add-slider') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">Add Sliders</i>
                    </div>
                </a>
            </li>
            <li class="nav-item {{ Request::is('categories') ? 'active bg-gradient-primary':'' }} ">
                <a class="nav-link text-white" href="{{ url('/categories') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">Categories</i>
                    </div>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-category') ? 'active bg-gradient-primary':'' }}">
                <a class="nav-link text-white " href="{{ url('/add-category') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">Add Category</i>
                    </div>
                </a>
            </li>
            <li class="nav-item {{ Request::is('products') ? 'active bg-gradient-primary':'' }} ">
                <a class="nav-link text-white" href="{{ url('/products') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">Products</i>
                    </div>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-products') ? 'active bg-gradient-primary':'' }}">
                <a class="nav-link text-white " href="{{ url('/add-products') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">Add Products</i>
                    </div>
                </a>
            </li>
            <li class="nav-item {{ Request::is('queries') ? 'active bg-gradient-primary':'' }}">
                <a class="nav-link text-white " href="{{ url('/queries') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">Query List</i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</aside>