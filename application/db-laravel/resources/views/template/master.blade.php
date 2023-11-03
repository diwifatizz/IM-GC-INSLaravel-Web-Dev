<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>imDW</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('adminLTE')}}/plugins/summernote/summernote-bs4.min.css">
    <style>
      .modal-dialog {
          display: flex;
          align-items: center;
          justify-content: center;
          min-height: calc(100vh - 60px); 
          margin: auto;
      }
        </style>
  </head>

  <body class="hold-transition dark-mode sidebar-mini layout-fixed">
  <div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('adminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/contact" class="nav-link">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- navbar end -->

  <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="/" class="nav-link brand-link ">
        <img src="{{asset('adminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">imDW</span>
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('adminLTE')}}/dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="/user" class="d-block">d i w i</a>
          </div>
      </div>
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-house-user"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/user" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-ninja"></i>
              <p>
                User
              </p>
            </a>
          </li>
            
           <li class="nav-item menu-is-opening"> 
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                  Tables
                  <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="/tables" class="nav-link {{ Request::is('tables') ? 'active' : '' }}"> 
              <i class="far fa-circle nav-icon"></i>
              <p>Progress Tables</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-tables" class="nav-link {{ Request::is('data-tables') ? 'active' : '' }}" >
              <i class="far fa-circle nav-icon"></i>
              <p>Data Tables</p>
            </a>
          </li>
          </ul>
          <li class="nav-item">
            <a href="/cast" class="nav-link {{ Request::is('cast') ? 'active' : '' }}">
              <i class="nav-icon fas fa-ghost"></i>
              <p>
                Casts
              </p>
              </a>
            </li>
          </li>
          </ul>
          </nav>
        </div>
        </aside>
          <div class="content-wrapper">
            <section class="content-header">
              <div class="container-fluid">
          </div>
<!-- Sidebar end -->
    </section>
    <section class="content">
      @yield('container')
    </section>
  </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="{{asset('adminLTE')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{asset('adminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/chart.js/Chart.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/sparklines/sparkline.js"></script>
<script src="{{asset('adminLTE')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="{{asset('adminLTE')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('adminLTE')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{asset('adminLTE')}}/dist/js/adminlte.js"></script>
<script src="{{asset('adminLTE')}}/dist/js/pages/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function deleteConfirmation(itemId) {
        Swal.fire({
            title: 'Anda Yakin?',
            text: "Data akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {

                document.getElementById('delete-form-' + itemId).submit();
                }
            });
        }
    </script>
@stack('scripts')
</body>

</html>
