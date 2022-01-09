<?php 
$pre = "/var/";
if(isset($_GET['action']))
{   
    $redirect = "dashboard.php";
    $action = $_GET['action'];
    if($action == "drr"){
        $file = fopen($pre."chms/vuln/sock/req.txt", "w");
        $redirect = "docker_sock.php?task_completed=drr";
    }
    else if($action == "dru"){
        $file = fopen($pre."chms/vuln/sock/update.txt", "w");
        $redirect = "docker_sock.php?task_completed=dru";
    }
    fwrite($file, "1");
    fclose($file);
    header('Location: '.$redirect);
}
else
{
    header('Location: dashboard.php');
}
