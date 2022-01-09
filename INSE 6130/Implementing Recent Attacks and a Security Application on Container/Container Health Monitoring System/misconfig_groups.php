<?php
  include('navbar.php');
  $misconfig_group = array();
  $myfile = fopen($pre."chms/vuln/group/username.txt", "r");
  while(!feof($myfile)) {
    $row1 = fgets($myfile);
    array_push($misconfig_group,$row1);
  }
  fclose($myfile);
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

  <?php showNavbar(14); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Misconfigured Docker Group</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Container Health Management System</a></li>
              <li class="breadcrumb-item active">Misconfigured Docker Group</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container">
            <div class="row">
              <div class="col-lg-12 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-dark">
                  <div class="inner">
                    <h3><?php echo ($misconfig_group[0]!="")?"Yes":"No"; ?></h3>

                    <p>Is Docker group Misconfigured?</p>
                  </div>
                  <div class="icon">
                    <i class='<?php echo ($misconfig_group[0]!="")?"fas fa-check":"fas fa-times"; ?>'></i>
                  </div>
                  <div class='small-box-footer <?php echo ($misconfig_group[0]!="")?"bg-red":"bg-green"; ?>'>
                  </div>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <?php 
              if($misconfig_group[0]!="")
              {
                ?>
            <div class="row">
              <div class="col-lg-12 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-dark">
                  <div class="inner">
                    <h3><?php echo $misconfig_group[0]; ?></h3>

                    <p>User with misconfigured docker group</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class='small-box-footer bg-blue'></div>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <?php } ?>
            <div class="d-flex flex-row-reverse justify-content-around">
                <button class="btn btn-dark" data-toggle="modal" data-target="#refresh">Refresh latest status</button>
                <button class="btn btn-dark" data-toggle="modal" data-target="#fix">Remove user from docker group</button>
              </div>
              <br>
            <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-red collapsed-card">
        <div class="card-header">
          <h3 class="card-title">What is Misconfigured Docker group?</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
          </div>
        </div>
        <div class="card-body" style="display: none;">
        If any local user on a host machine is added into a docker group, that user can escalate privileges and become root on
the host machine by mounting the host filesystem on the docker container and then further modifying the /etc/passwd
file of a host. This attack works mainly because the Docker daemon, by default, runs as root, and if any user on the
host machine is allowed to run containers, privilege escalation is possible.
        </div>
      </div>
    </div>
        
    <div class="col-md-12">
      <div class="card card-outline card-green collapsed-card">
        <div class="card-header">
          <h3 class="card-title">Steps to fix Misconfigured Docker groups</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
          </div>
        </div>
        <div class="card-body">
        Remove the current user from existing docker group to fix the vulnerability.
        </div>
      </div>
    </div>
    </div>
        </div>
    </section>
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
<div class="modal fade" id="refresh" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <p>Clicking on <b>Yes</b> would run a shell script in the background to fetch the latest status of docker registry on this machine. This would take about 30 seconds to reload. Are you sure that you want to continue?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <a href="status_update_m.php?action=mru" type="button" class="btn btn-primary">Yes</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="fix" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <p>Clicking on <b>Yes</b> would run a shell script in the background to stop the container for vulnerable registry. Are you sure you want to continue? </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <a href="status_update_m.php?action=mrr" type="button" class="btn btn-primary">Yes</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

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
<!-- page specific script -->
<?php 
  if(isset($_GET['task_completed'])){
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 
    <!-- toaster -->
  <script>
    toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "10000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
<?php if($_GET['task_completed']=="drr")
{
  ?>
   toastr.success("A request have been made to remove the user from docker group. The same would take about 10 seconds to update in the system");
  <?php } else { ?>
    toastr.options.onHidden = function() { 
      location.href='misconfig_groups.php';
    };
    toastr.success("A request have been made to update the status of misconfigured docker group. The page would refresh in 10 seconds!");
  <?php } ?>
  </script>
  <?php } ?>
</body>
</html>
