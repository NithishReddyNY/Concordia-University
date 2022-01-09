<?php
  include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Container HMS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/hms_logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <?php showNavbar(9); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Developer Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Container Health Management System</a></li>
              <li class="breadcrumb-item active">Developer Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class = "container">
      <section>
      <div class="card card-solid">
                    <div class="card-body pb-0">
                        <div class="row d-flex align-items-stretch">
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header border-bottom-0 bg-primary">
                                        <strong>Security Implementation</strong>
                                    </div>
                                    <div class="card-body pt-0 mt-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>Jeevesh Awal</b></h2>
                                                <p class=" text-sm"><b>Role: </b> Application and Security Architect </p>
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-book-reader"></i></span> <strong>Student ID#: </strong> 40169864</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span> <strong>Program: </strong> INSE</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="dist/img/Jeevesh.jpg" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <strong>Mail: </strong> j_awal@live.concordia.ca</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <strong>Phone #:</strong> +91 783-8578-189</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-left">
                                            <a href="https://www.linkedin.com/in/jeevesh-awal-a04685128/" target="_blank" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header  border-bottom-0 bg-primary">
                                        <strong>Security Implementation</strong>
                                    </div>
                                    <div class="card-body pt-0 mt-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>Nithish Reddy Yalaka</b></h2>
                                                <p class=" text-sm"><b>Role: </b>User Interface Architect and Design</p>
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-book-reader"></i></span> <strong>Student ID: </strong>40164619</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span> <strong>Program: </strong>INSE</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="dist/img/Nithish.jpg" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <strong>Mail: </strong>n_yalaka@live.concordia.ca</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <strong>Phone #: </strong>+91 991-2284-179</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-left">
                                            <a href="https://www.linkedin.com/in/nithishreddy/" target="_blank" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header   border-bottom-0 bg-danger">
                                        <strong>Attack Implementation</strong>
                                    </div>
                                    <div class="card-body pt-0 mt-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>Rohan Pagey</b></h2>
                                                <p class=" text-sm "><b>Role: </b>Attack Strategy and Implementation </p>
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-book-reader"></i></span> <strong>Student ID: </strong>40168378</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span> <strong>Program: </strong>INSE</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="dist/img/Rohan.jpg" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <strong>Mail: </strong>r_pagey@live.concordia.ca</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <strong>Phone #: </strong>+91 843-5672-748</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-left">
                                            <a href="https://www.linkedin.com/in/rohan-pagey/" target="_blank" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header  border-bottom-0 bg-danger">
                                        <strong>Attack Implementation</strong>
                                    </div>
                                    <div class="card-body pt-0 mt-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>Lakshay Bareja</b></h2>
                                                <p class=" text-sm"><b>Role: </b> Host Attacking and Linux Developer </p>
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-book-reader"></i></span> <strong>Student ID: </strong>40156832</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span> <strong>Program:</strong>INSE</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="dist/img/Lakshay.jpg" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <strong>Mail: </strong>l_bareja@live.concordia.ca</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span><strong> Phone #: </strong>+91 999-1675-767</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-left">
                                            <a href="https://www.linkedin.com/in/lakshay-bareja-869319a3/" target="_blank" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header  border-bottom-0 bg-danger">
                                        <strong>Attack Implementation</strong>
                                    </div>
                                    <div class="card-body pt-0 mt-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>Meghrajsinh Chauhan</b></h2>
                                                <p class=" text-sm"><b>Role: </b> Application Attacking and Host Security </p>
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-book-reader"></i></span> <strong>Student ID: </strong>40156699</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span> <strong>Program: </strong>INSE</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="dist/img/Meghraj.jpg" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <strong>Mail: </strong>m_auha@live.concordia.ca</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <strong>Phone #: </strong>+91 875-8854-634</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-left">
                                            <a href="https://www.linkedin.com/in/meghrajsinh-chauhan/" target="_blank" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header  border-bottom-0 bg-primary">
                                        <strong>Security Implementation</strong>
                                    </div>
                                    <div class="card-body pt-0 mt-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>Devanshi Rajpara</b></h2>
                                                <p class=" text-sm"><b>Role: </b> Web Application Developer </p>
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-book-reader"></i></span> <strong>Student ID: </strong>40164374</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span> <strong>Program: </strong> INSE</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="dist/img/Devanshi.jpg" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <strong>Mail: </strong>d_rajpar@live.concordia.ca</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <strong>Phone #: </strong>+91 992-2988-000</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-left">
                                            <a href="https://www.linkedin.com/in/devanshi-rajpara-4921a7206/" target="_blank" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header  border-bottom-0 bg-danger">
                                        <strong>Attack Implementation</strong>
                                    </div>
                                    <div class="card-body pt-0 mt-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>Siva Teja Narayanabhatla</b></h2>
                                                <p class=" text-sm"><b>Role: </b> UI Designer </p>
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-book-reader"></i></span> <strong>Student ID: </strong>40166568</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span> <strong>Program: </strong>INSE</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="dist/img/Siva.jpg" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <strong>Mail: </strong>s_rayana@live.concordia.ca</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <strong>Phone #: </strong>+91 988-4428-749</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-left">
                                            <a href="https://www.linkedin.com/in/n-siva-teja/" target="_blank" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header  border-bottom-0 bg-primary">
                                        <strong>Security Implementation</strong>
                                    </div>
                                    <div class="card-body pt-0 mt-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>Venkata Narsu Pavani Shrinija Dosapati</b></h2>
                                                <p class=" text-sm"><b>Role: </b> UI Designer </p>
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-book-reader"></i></span> <strong>Student ID: </strong>40162308</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span> <strong>Program: </strong>INSE</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="dist/img/shrinija.jpg" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="ml-4 mb-0 fa-ul ">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> <strong>Mail: </strong>v_dosapa@live.concordia.ca</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <strong>Phone #:</strong>+91 809-6817-324</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-left">
                                            <a href="https://www.linkedin.com/in/shrinija-dosapati-089897141" target="_blank" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
                <!-- /.card-footer -->
        </div>
      </section>
    </div>
    
    <!-- /.content -->    
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4-->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
