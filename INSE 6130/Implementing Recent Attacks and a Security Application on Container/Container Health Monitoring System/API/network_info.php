<?php 
    include('apipre.php');
    $network_info = array();
    $keys = array("containerID","containerIPAddress");
    $key_index = 0;
    $myfile = fopen($pre."chms/container/ip.txt", "r");
    while(!feof($myfile)) {
        $row1 = fgets($myfile);
            if(!$row1==""){
                $temp = array();
                $elements = preg_split("/\,/",preg_replace("/\r|\n/","",$row1));
                foreach($elements as $t)
                $temp += array($keys[$key_index++]=>$t);
                array_push($network_info,$temp);
                unset($t);
                $key_index = 0;
        }
    }
    fclose($myfile);
    echo json_encode($network_info,JSON_UNESCAPED_SLASHES);

?>