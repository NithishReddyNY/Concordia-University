<?php 
    include('apipre.php');
    $misconfig_info = array();
    $keys = array("containername","isMisconfig");
    $key_index = 0;
    $myfile = fopen($pre."chms/container/is_priv.txt", "r");
    while(!feof($myfile)) {
        $row1 = fgets($myfile);
            if(!$row1==""){
                $temp = array();
                $elements = preg_split("/\,/",preg_replace("/\r|\n/","",$row1));
                foreach($elements as $t)
                $temp += array($keys[$key_index++]=>$t);
                array_push($misconfig_info,$temp);
                unset($t);
                $key_index = 0;
        }
    }
    fclose($myfile);
    echo json_encode($misconfig_info,JSON_UNESCAPED_SLASHES);

?>