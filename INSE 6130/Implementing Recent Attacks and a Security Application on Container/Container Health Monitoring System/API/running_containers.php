<?php 
    include('apipre.php');
    $finalData = array();
    $tempProcesses = array();
    $file = fopen($pre."chms/container/stats.txt","r");
    while(!feof($file)){
        $row = fgets($file);
        if(!$row==""){
            $elements = preg_split("/\,/",$row);
            $myfile1 = fopen($pre."chms/container/processes/".$elements[0].".txt", "r");
            if($myfile1)
            while(!feof($myfile1)) {
            $row1 = fgets($myfile1);
            if(!$row1==""){
                $string_array = preg_split("/\,/",$row1);
                array_push($tempProcesses,array("pid"=>$string_array[0],"user"=>$string_array[1],"ni"=>$string_array[2],"CPUUtilization"=>$string_array[3],"command"=>preg_replace("/\r|\n/","",$string_array[4])));
                }
            }
            fclose($myfile1);
            $data = array("containerId"=>$elements[0],"containerName"=>$elements[1],"CPUutilization"=>$elements[2],"memoryUtilization"=>preg_replace("/\r|\n/","",$elements[3]),"networkIO"=>preg_replace("/\r|\n/","",$elements[4]),"blockIO"=>preg_replace("/\r|\n/","",$elements[5]),"processes"=>$tempProcesses);
            array_push($finalData, $data);
            $tempProcesses = array();
        }
    }
    echo json_encode($finalData,JSON_UNESCAPED_SLASHES);
    fclose($file);
?>