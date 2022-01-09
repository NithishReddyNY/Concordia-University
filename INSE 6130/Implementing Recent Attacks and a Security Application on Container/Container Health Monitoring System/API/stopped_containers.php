<?php 
    include('apipre.php');
    $data = array();
    $file = fopen($pre."chms/container/stopped_container.txt","r");
    while(!feof($file)){
        $row = fgets($file);
        if(!$row==""){
            $elements = preg_split("/\,/",$row);
            array_push($data, array("containerId"=>$elements[0],"imageName"=>$elements[1],"command"=>str_replace('"',"",$elements[2]),"containerName"=>preg_replace("/\r|\n/","",$elements[7])));
        }
    }
    echo json_encode($data,JSON_UNESCAPED_SLASHES);
    fclose($file);
?>