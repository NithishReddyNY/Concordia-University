<?php 
    include('apipre.php');
    $host_info = array();
    $keys = array("hostName","kernelVersion","OSVersion","CPUSpeed","CPUCore","arch","RAM");
    $key_index = 0;
    $myfile = fopen($pre."chms/hostinfo.txt", "r");
    while(!feof($myfile)) {
        $row1 = fgets($myfile);
            if(!$row1==""){
                $host_info += array($keys[$key_index++]=>preg_replace("/\r|\n/","",$row1));
        }
    }
    fclose($myfile);
    echo json_encode(array_map('utf8_encode',$host_info),JSON_UNESCAPED_SLASHES);

?>