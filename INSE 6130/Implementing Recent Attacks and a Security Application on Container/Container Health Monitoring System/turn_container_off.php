<?php
$pre = "/var/";
if (isset($_GET['containerID'])) {
    $containerID = $_GET['containerID'];
    $myfile = fopen($pre . "chms/exec/container_stop.txt", "a") or header('Location: dashboard.php');
    fwrite($myfile, $containerID . "\n");
    fclose($myfile);
    header('Location: dashboard.php?action=off&cid=' . $containerID);
} else
    header('Location: dashboard.php');
