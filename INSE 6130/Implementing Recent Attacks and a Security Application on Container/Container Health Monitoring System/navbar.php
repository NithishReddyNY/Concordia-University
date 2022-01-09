<?php
$pre = "/var/";
error_reporting(0);
global $total_containers;
global $total_stopped_containers;
global $container_stats_array;
global $running_container_id;
global $current_stopped_container;
global $container_name;
global $container_stopped_array;
$running_container_id = array();
$myfile = fopen($pre . "chms/container/running_containers.txt", "r");
while (!feof($myfile)) {
  $row1 = fgets($myfile);
  $str_arr1 = preg_split("/\,/", $row1);
  array_push($running_container_id, $str_arr1[0]);
}
fclose($myfile);

$container_name = (isset($_GET['container_name'])) ? $_GET['container_name'] : "No Container Running";
$container_stats_array = array();
$myfile = fopen($pre . "chms/container/stats.txt", "r");
// Output one line until end-of-file
while (!feof($myfile)) {
  $row = fgets($myfile);
  $str_arr = preg_split("/\,/", $row);
  $name = $str_arr[1];
  if ($name != '') ($container_stats_array += array($name => $str_arr));
}
fclose($myfile);
$current_container = $container_name != "No Container Running" ? $container_stats_array[$container_name] : "No Container Running";
$total_containers = count($container_stats_array);

$container_ID = $container_name != "No Container Running" ? $current_container[0] : "empty";
$myfile = fopen($pre . "chms/container/processes/$container_ID.txt", "r");
$all_processes = array();
// Output one line until end-of-file
while (!feof($myfile)) {
  $row = fgets($myfile);
  array_push($all_processes, $row);
}
fclose($myfile);
// Stopped container
$container_stopped_array = array();
$myfile = fopen($pre . "chms/container/stopped_container.txt", "r");
$stopped_container_ID1 = (isset($_GET['stopped_container_ID'])) ? $_GET['stopped_container_ID'] : "N";
while (!feof($myfile)) {
  $row1 = fgets($myfile);
  $str_arr1 = preg_split("/\,/", $row1);
  $stopped_container_ID = $str_arr1[0];
  if ($stopped_container_ID != '')
    $container_stopped_array += array($stopped_container_ID => $str_arr1);
}
fclose($myfile);
$current_stopped_container = $stopped_container_ID != "N" ? $container_stopped_array[$stopped_container_ID1] : "N";
$total_stopped_containers = count($container_stopped_array);

function showNavbar($opt)
{
  global $total_containers;
  global $total_stopped_containers;
  global $container_stats_array;
  global $running_container_id;
  global $current_stopped_container;
  global $container_name;
  global $container_stopped_array;
?>
  <script>
    function showHint(containerID) {
      if (containerID.length == 0) {
        //Nothing to search for
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("txtHint").innerHTML = this.responseText;
            console.log(this.responseText);
          }
        };
        xmlhttp.open("GET", "getcontainers.php?q=" + containerID, true);
        xmlhttp.send();
      }
    }
  </script>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Container Health Monitoring System</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?php echo $total_containers + $total_stopped_containers; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Docker Container Updates</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-play-circle mr-2"></i><?php echo $total_containers; ?> Running Containers
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-stop-circle mr-2"></i><?php echo $total_stopped_containers; ?> Stopped Containers
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/hms_logo.png" alt="Container HMS Logo" class="brand-image">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">INSE 6130 Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" onkeyup="showHint(this.value)">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php if ($opt == 1) echo 'active'; ?>">
              <i class="nav-icon fab fa-docker"></i>
              <p>
                Docker Information
              </p>
            </a>
          </li>
          <li class="nav-item <?php if ($opt == 2) echo 'menu-open'; ?>">
            <a href="" class="nav-link <?php if ($opt == 2) echo 'active'; ?>">
              <i class="nav-icon fas fa-play-circle"></i>
              <p>
                Running Containers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php
              foreach ($container_stats_array as $value) {
                if (!$value[0] == "")
                  if (in_array($value[0], $running_container_id)) {
              ?>
                  <li class="nav-item">
                    <a href="running_containers.php?container_name=<?php echo ($value[1]); ?>" class="nav-link <?php echo $container_name == $value[1] ? 'active' : ''; ?>">
                      <i class="fas fa-box-open text-green"></i>
                      <p>
                        <?php echo ($value[0]); ?>
                        <i class="right fa fa-circle text-success cfs-10"></i>
                      </p>
                    </a>
                  </li>
              <?php
                  }
              }
              ?>
            </ul>
          </li>
          <li class="nav-item <?php if ($opt == 3) echo 'menu-open'; ?>">
            <a href="" class="nav-link <?php if ($opt == 3) echo 'active'; ?>">
              <i class="nav-icon fas fa-stop-circle"></i>
              <p>
                Stopped Containers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php
              foreach ($container_stopped_array as $value) {
                if (!$value[0] == "") {
              ?>
                  <li class="nav-item">
                    <a href="stopped_containers.php?stopped_container_ID=<?php echo ($value[0]); ?>" class="nav-link <?php echo $current_stopped_container[0] == $value[0] ? 'active' : ''; ?>">
                      <i class="fas fa-box text-danger"></i>
                      <p>
                        <?php echo ($value[0]); ?>
                        <i class="right fa fa-circle text-danger cfs-10"></i>
                      </p>
                    </a>
                  </li>
              <?php
                }
              }
              ?>
            </ul>
          </li>
          <li class="nav-item <?php if ($opt > 10) echo 'menu-open'; ?>">
            <a href="" class="nav-link <?php if ($opt > 10) echo 'active'; ?>">
              <i class="nav-icon fas fa-user-secret"></i>
              <p>
                Vulnerabilities
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="runc.php" class="nav-link <?php if ($opt == 11) echo 'active'; ?>">
                  <i class="fas nav-icon fa-file-code"></i>
                  <p>
                    RunC
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="docker_sock.php" class="nav-link <?php if ($opt == 12) echo 'active'; ?>">
                  <i class="fas nav-icon fa-cogs"></i>
                  <p>
                    Docker.Sock
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vulnerable_registry.php" class="nav-link <?php if ($opt == 13) echo 'active'; ?>">
                  <i class="fas nav-icon fa-file-contract"></i>
                  <p>
                    Vulnerable Registry
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="misconfig_groups.php" class="nav-link <?php if ($opt == 14) echo 'active'; ?>">
                  <i class="fas nav-icon fa-users-slash"></i>
                  <p>
                    Misconfigured Group
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="docker_images.php" class="nav-link <?php if ($opt == 4) echo 'active'; ?>">
              <i class="nav-icon fas fa-compact-disc"></i>
              <p>
                All Images
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="files_modified.php" class="nav-link <?php if ($opt == 5) echo 'active'; ?>">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Files Modified
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="network_information.php" class="nav-link <?php if ($opt == 6) echo 'active'; ?>">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>
                Network Information
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="misconfig.php" class="nav-link <?php if ($opt == 7) echo 'active'; ?>">
              <i class="nav-icon fas fa-exclamation-triangle"></i>
              <p>
                Misconfigured Capabilities
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="host_info.php" class="nav-link <?php if ($opt == 8) echo 'active'; ?>">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Host Information
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="mobile_app.php" class="nav-link <?php if ($opt == 10) echo 'active'; ?>">
              <i class="nav-icon fab fa-android"></i>
              <p>
                Application
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="developer_info.php" class="nav-link <?php if ($opt == 9) echo 'active'; ?>">
              <i class="nav-icon fas fa-laptop-code"></i>
              <p>
                Developer Information
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php
}
?>