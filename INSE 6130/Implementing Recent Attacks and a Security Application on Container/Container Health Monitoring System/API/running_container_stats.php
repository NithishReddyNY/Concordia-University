<?php 
    include('apipre.php');
    if(isset($_GET['containerID'])){
        $flag = 0;
        $containerID = strip_tags($_GET['containerID']);
        $file = fopen($pre."chms/container/stats.txt","r");
        while(!feof($file)){
            $row = fgets($file);
            $elements = preg_split("/\,/",$row);
            if($elements[0]==$containerID)
            {
                $data = array($elements[2],preg_replace("/\r|\n/","",$elements[3]),preg_replace("/\r|\n/","",$elements[4]),preg_replace("/\r|\n/","",$elements[5]));
                echo json_encode(array_map('utf8_encode',$data),JSON_UNESCAPED_SLASHES);
                $flag = 1;
            }
        }
        fclose($file);
        if ($flag == 0)
        {
            echo json_encode(array("error"=>"container not found"));
        }
    }
    else{
        echo json_encode(array("error"=>"Please enter containerID"));
    }

?>