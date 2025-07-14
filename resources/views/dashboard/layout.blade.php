  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/js/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
            <a class="navbar-brand brand-logo" href=""><img src="{{ asset('assets/img/logo.svg') }}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href=""><img src="{{ asset('assets/img/logo-mini.svg') }}" alt="logo"/></a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>  
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('assets/img/user/' . Auth::user()->avatar) }}" alt="profile" />

                <span class="nav-profile-name">{{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{ url('auth/logout') }}">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('halaman.index') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Halaman</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('experience.index') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Experience</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @include('dashboard.pesan')
            <div class="row">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    @yield('konten')
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard  </a> templates</span>
          </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

<!-- Inisialisasi Summernote -->
<script>
   $('.summernote').summernote({
        tabsize: 2,
        height: 150
      });
</script>

    <!-- plugins:js -->
    <script src="{{ asset('assets/js/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('assets/js/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.js') }}"></script>
    <!-- End custom js for this page-->

    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
  </body>

  </html>
