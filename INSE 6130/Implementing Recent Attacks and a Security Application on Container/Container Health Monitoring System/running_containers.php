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
    <?php showNavbar(2); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <div class="form-group toggle-switch-prop">
                <h1 class="m-0">Dashboard - <?php echo ($current_container[1]); ?></h1>
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success ml-3">
                  <script>
                    function stopContainer(event, containerID) {
                      let userdecision = confirm('Are you sure you want to stop ' + containerID + '?');
                      if (userdecision == true)
                        window.location.replace('turn_container_off.php?containerID=' + containerID);
                      else {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                    }
                  </script>
                  <input type="checkbox" class="custom-control-input" id="customSwitch3" checked onclick="stopContainer(event,'<?php echo $current_container[0]; ?>')">
                  <label class="custom-control-label" for="customSwitch3"></label>
                </div>
              </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Container Health Management System</a></li>
                <li class="breadcrumb-item active"><?php echo ($current_container[0]); ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-microchip"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">CPU Utilization</span>
                  <span class="info-box-number" id="cpu">
                    <?php echo $current_container == "No Container Running" ? "No Container Selected" : $current_container[2]; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-memory"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Memory Utilization</span>
                  <span class="info-box-number" id="memory"><?php echo $current_container == "No Container Running" ? "No Container Selected" : preg_split("#/#", $current_container[3])[0]; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-network-wired"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Network IO</span>
                  <span class="info-box-number" id="network"> <?php echo $current_container == "No Container Running" ? "No Container Selected" : $current_container[4]; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning forced-white elevation-1"><i class="fas fa-folder-open"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Block I/O</span>
                  <span class="info-box-number" id="block"><?php echo $current_container == "No Container Running" ? "No Container Selected" : $current_container[5]; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"><strong>System Processes of Container <span class="text-info">(<?php echo ($current_container[0]); ?>)</span></strong></h4>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>USER</th>
                        <th>Process ID (PID)</th>
                        <th>Nice Value (NI)</th>
                        <th>CPU Utilization (%)</th>
                        <th>Command</th>
                        <th>Kill Process</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($all_processes as $value) {
                        $str_arr = preg_split("/\,/", $value);
                        if ($str_arr[0] != "") {
                      ?>
                          <tr id = "<?php echo $str_arr[1]; ?>">
                            <td><?php echo $str_arr[0]; ?></td>
                            <td><?php echo $str_arr[1]; ?></td>
                            <td><?php echo $str_arr[2]; ?></td>
                            <td><?php echo $str_arr[3]; ?></td>
                            <td><?php echo $str_arr[4]; ?></td>
                            <td class="d-flex justify-content-center"><a href="kill_process.php?pid=<?php echo $str_arr[1]; ?>&container_ID=<?php echo $current_container[0]; ?>&container_name=<?php echo $current_container[1];?>" class="btn btn-small btn-danger" onclick="return confirm('Are you sure you want to Kill the Process ID: <?php echo $str_arr[1]; ?> running on <?php echo $current_container[0]; ?>?');"><?php echo $str_arr[1]; ?></a></td>
                          </tr>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Process ID (PID)</th>
                        <th>USER</th>
                        <th>Nice Value (NI)</th>
                        <th>CPU Utilization (%)</th>
                        <th>Command</th>
                        <th>Kill Process</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Container Logs</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body" style="display: block;">
            <?php
            $myfile1 = fopen($pre . "chms/container/logs/" . $current_container[0] . ".log", "r");
            if ($myfile1)
              while (!feof($myfile1)) {
                $row1 = fgets($myfile1);
                echo ($row1) . "<br>";
              }
            fclose($myfile1);
            ?>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
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
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
<?php 
if(isset($_GET['pid']) && isset($_GET['container_ID']) && isset($_GET['container_name'])){
?>
<script>
$('#example1').DataTable().row('#<?php echo $_GET["pid"];?>').remove().draw();
</script>
<?php } ?>
  <script>
    //for Async API calls//
    let url = "API/running_container_stats.php?containerID=<?php echo $current_container[0]; ?>";
    async function APICall() {
      const response = await fetch(url);
      const data = await response.json();
      // console.log(data);
      let cpu = document.getElementById('cpu');
      let memory = document.getElementById('memory');
      let network = document.getElementById('network');
      let disk = document.getElementById('block');
      if (data[0] != undefined) {
        cpu.innerHTML = data[0];
        memory.innerHTML = data[1];
        network.innerHTML = data[2];
        block.innerHTML = data[3];
      }
    }
    setInterval(APICall, 2000);
  </script>
  <?php 
  if(isset($_GET['pid']) && isset($_GET['container_ID']) && isset($_GET['container_name'])){
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
    toastr.warning("You have killed pid: <?php echo $_GET['pid'];?> It would take 10 seconds to reload the updated process list.");
    </script>
  <?php } ?>
</body>
</html>