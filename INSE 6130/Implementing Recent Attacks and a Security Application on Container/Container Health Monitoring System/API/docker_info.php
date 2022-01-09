<?php 
    include('apipre.php');
    $docker_info = array();
    $keys = array("dockerClientVersion","dockerEngineVersion","containerVersion","runcVersion");
    $key_index = 0;
    $myfile = fopen($pre."chms/docker_static.txt", "r");
    while(!feof($myfile)) {
        $row1 = fgets($myfile);
            if(!$row1==""){
                $docker_info += array($keys[$key_index++]=>preg_replace("/\r|\n/","",$row1));
        }
    }
    fclose($myfile);
    echo json_encode(array_map('utf8_encode',$docker_info),JSON_UNESCAPED_SLASHES);

?>