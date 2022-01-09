<?php 
$pre = "/var/";
if(isset($_GET['action']))
{   
    $redirect = "dashboard.php";
    $action = $_GET['action'];
    if($action == "rrr"){
        $file = fopen($pre."chms/vuln/runc/req.txt", "w");
        $redirect = "runc.php?task_completed=rrr";
    }
    else if($action == "rru"){
        $file = fopen($pre."chms/vuln/runc/update.txt", "w");
        $redirect = "runc.php?task_completed=rru";
    }
    fwrite($file, "1");
    fclose($file);
    header('Location: '.$redirect);
}
else
{
    header('Location: dashboard.php');
}
