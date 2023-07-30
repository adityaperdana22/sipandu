
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('assets_admin') }}/img/logo/logo.png" rel="icon">
  <title>@yield('title')</title>
  <link href="{{ asset('assets_admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets_admin') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets_admin') }}/css/ruang-admin.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <style>
    label{
        font-weight: 600
    }
  </style>
</head>

<body id="page-top">
  <script src="{{ asset('assets_admin') }}/vendor/jquery/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('assets_admin') }}/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Ruang Admin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      @if (session('level_user') === 'admin')
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Master Data
      </div>
      {{-- <hr class="sidebar-divider"> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span>
        </a>
      </li> --}}
      @endif
      @if (session('level_user') === 'admin')
      <li class="nav-item {{ Route::is('category.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('category.index') }}">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Kateogri Informasi</span>
        </a>
      </li>
      @endif
      @if (session('level_user') === 'admin')
      <li class="nav-item {{ Route::is('informasi.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('informasi.index') }}">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Informasi</span>
        </a>
      </li>
      @endif
      @if (session('level_user') === 'admin' )
      <li class="nav-item {{ Route::is('penduduk.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('penduduk.index') }}">
          <i class="fas fa-fw fa-users"></i>
          <span>Penduduk</span>
        </a>
      </li>
      @endif
      @if (session('level_user') === 'admin')
      <li class="nav-item {{ Route::is('kelahiran.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kelahiran.index') }}">
          <i class="fas fa-fw fa-user"></i>
          <span>Kelahiran</span>
        </a>
      </li>
      @endif
      @if (session('level_user') === 'admin' || session('level_user') === 'warga')
      <li class="nav-item {{ Route::is('kematian.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kematian.index') }}">
          <i class="fas fa-fw fa-user-alt-slash"></i>
          <span>Kematian</span>
        </a>
      </li>
      @endif
      @if (session('level_user') === 'admin' || session('level_user') === 'warga')
      <li class="nav-item {{ Route::is('pendatang.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pendatang.index') }}">
          <i class="fas fa-fw fa-user-plus"></i>
          <span>Pendatang</span>
        </a>
      </li>
      @endif
      @if (session('level_user') === 'admin' || session('level_user') === 'warga')
      <li class="nav-item {{ Route::is('pindah.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pindah.index') }}">
          <i class="fas fa-fw fa-user-minus"></i>
          <span>Pindah</span>
        </a>
      </li>
      @endif
      @if (session('level_user') === 'admin')
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Laporan
      </div>
      <li class="nav-item {{ Route::is('laporan.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('laporan.index') }}">
          <i class="fas fa-fw fa-file"></i>
          <span>Laporan</span>
        </a>
      </li>
      @endif
      

    </ul>

    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('assets_admin') }}/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{ session('name') }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        @yield('content')

      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto py-2">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - distributed by
              <b><a href="https://themewagon.com/" target="_blank">themewagon</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  {{-- <script src="{{ asset('assets_admin')}}/js/sweetalert.js"></script> --}}
  <script src="{{ asset('assets_admin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets_admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{ asset('assets_admin') }}/js/ruang-admin.min.js"></script>
  <script src="{{ asset('assets_admin') }}/vendor/chart.js/Chart.min.js"></script>
  <script src="{{ asset('assets_admin') }}/js/demo/chart-area-demo.js"></script>

  <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script>
    let table = new DataTable('#myTable');
  </script>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>


</body>

</html>
