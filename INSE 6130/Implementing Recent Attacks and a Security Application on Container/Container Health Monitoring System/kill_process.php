<?php 
if(isset($_GET['pid']) && isset($_GET['container_ID']) && isset($_GET['container_name'])){
    $pid = $_GET['pid'];
    $container_ID = $_GET['container_ID'];
    $container_name = $_GET['container_name'];
    $file = fopen($pre."chms/vuln/rev_shell/proc_kill.txt", "a");
    fwrite($file, $container_ID.",".$pid."\n");
    fclose($file);
    header('Location: running_containers.php?container_name='.$container_name.'&pid='.$pid.'&container_ID='.$container_ID);
}
else{
    header('Location: dashboard.php');
}
?>