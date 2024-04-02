@php $adminname = \App\Models\Admin::first(); @endphp
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">Dashboard</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
          </a>
        </li>

        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{$adminname->name}}
          </button>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{url('/dashboard')}}">Profile</a></li>
          <li><a class="dropdown-item" href="{{ url('/admin/logout') }}">Log Out</a></li>
          </ul>
        </div>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfie">
          <a href="#" class="dropdown-item">Profile</a>
          <a href="#" class="dropdown-item">Settings</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">Log out</a>
        </div>
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>