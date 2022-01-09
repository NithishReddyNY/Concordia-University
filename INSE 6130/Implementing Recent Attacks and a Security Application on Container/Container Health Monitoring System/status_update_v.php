<?php 
$pre = "/var/";
if(isset($_GET['action']))
{   
    $redirect = "dashboard.php";
    $action = $_GET['action'];
    if($action == "vrr"){
        $file = fopen($pre."chms/vuln/registry/req.txt", "w");
        $redirect = "vulnerable_registry.php?task_completed=vrr";
    }
    else if($action == "vru"){
        $file = fopen($pre."chms/vuln/registry/update.txt", "w");
        $redirect = "vulnerable_registry.php?task_completed=vru";
    }
    fwrite($file, "1");
    fclose($file);
    header('Location: '.$redirect);
}
else
{
    header('Location: dashboard.php');
}
