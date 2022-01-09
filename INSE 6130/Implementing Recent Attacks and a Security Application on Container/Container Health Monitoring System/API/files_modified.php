<?php
    $data = array();
    $tmp = "";
    require('apipre.php');
    $count = 0;
    $path = $pre."chms/container/files_modified";
    $dir = opendir($path);
    while ($files = readdir($dir)){
        $file_name = explode('.',$files);
        if($file_name[0]!=""&&$file_name[0]!=" "){
            if($files == "." || $files == "..")
            continue;
            $file = fopen($pre."chms/container/files_modified/".$files, "r");
            if($file){
                while(!feof($file)) {
                $row = fgets($file);
                $row = preg_replace("/\r|\n/","",$row)."\n";
                $tmp = $tmp.$row;
                }
                $data += array($file_name[0] => $tmp);
            }
            fclose($file);
        }
    }
    echo json_encode($data,JSON_UNESCAPED_SLASHES);
?>