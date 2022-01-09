<?php
$pre = "/var/";
if (isset($_GET['containerID'])) {
    $containerID = $_GET['containerID'];
    $myfile = fopen($pre . "chms/exec/container_start.txt", "a") or header('Location: dashboard.php');
    fwrite($myfile, $containerID . "\n");
    fclose($myfile);
    header('Location: dashboard.php?action=on&cid=' . $containerID);
} else
    header('Location: dashboard.php');
