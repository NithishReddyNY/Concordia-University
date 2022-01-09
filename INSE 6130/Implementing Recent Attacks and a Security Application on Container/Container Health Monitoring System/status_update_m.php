<?php 
$pre = "/var/";
if(isset($_GET['action']))
{   
    $redirect = "dashboard.php";
    $action = $_GET['action'];
    if($action == "mrr"){
        $file = fopen($pre."chms/vuln/group/req.txt", "w");
        $redirect = "misconfig_groups.php?task_completed=mrr";
    }
    else if($action == "mru"){
        $file = fopen($pre."chms/vuln/group/update.txt", "w");
        $redirect = "misconfig_groups.php?task_completed=mru";
    }
    fwrite($file, "1");
    fclose($file);
    header('Location: '.$redirect);
}
else
{
    header('Location: dashboard.php');
}
