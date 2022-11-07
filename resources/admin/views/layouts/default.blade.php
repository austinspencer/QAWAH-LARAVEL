<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminTheme/plugins/fontawesome-free/css/all.min.css') }} ">

  <link rel="stylesheet" href="{{ asset('adminTheme/plugins/ekko-lightbox/ekko-lightbox.css') }}">

  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminTheme/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ asset('adminTheme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminTheme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminTheme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('adminTheme/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminTheme/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
  <link href="{{ asset('adminTheme/dist/css/my_custom_css.css') }}" rel="stylesheet">

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('layouts.header')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1e282c;">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{ asset('adminTheme/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminTheme/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <?php $title2 = REQUEST::segment(2); ?>
            <h1 class="m-0"><?=ucfirst($title2)?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      @yield('content')
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 <!--  <aside class="control-sidebar control-sidebar-dark">
   
  </aside> -->
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="{{asset('adminTheme/plugins/jquery/jquery.min.js')}} "></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<!-- Bootstrap -->
<script src="{{asset('adminTheme/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>


<script src="{{asset('adminTheme/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>

<script src="{{asset('adminTheme/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminTheme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminTheme/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminTheme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminTheme/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('adminTheme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<!-- AdminLTE -->

<!-- Toastr -->
<script src="{{ asset('adminTheme/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('adminTheme/plugins/toastr/toastr.min.js') }}"></script>

<!-- Form Validation  -->
  <script src="{{ asset('adminTheme/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('adminTheme/plugins/jquery-validation/additional-methods.min.js') }}"></script>


<script src="{{asset('adminTheme/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('adminTheme/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminTheme/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminTheme/dist/js/pages/dashboard3.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<script src="{{asset('adminTheme/dist/js/my_custom.js')}}"></script>

<script type="text/javascript">
// var APP_URL = {!! json_encode(url('/')) !!};
</script>
@stack('footer-scripts')



  
</body>
</html>
