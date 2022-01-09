<?php 
    include('apipre.php');
    $images_array = array();
    $keys = array("imageID","imageName","tag","date","size");
    $key_index = 0;
    $myfile = fopen($pre."chms/list_images.txt", "r");
    while(!feof($myfile)) {
        $row1 = fgets($myfile);
            if(!$row1==""){
                $temp = array();
                $elements = preg_split("/\,/",preg_replace("/\r|\n/","",$row1));
                foreach($elements as $t)
                $temp += array($keys[$key_index++]=>$t);
                array_push($images_array,$temp);
                unset($t);
                $key_index = 0;
            }
    }
  fclose($myfile);
  echo json_encode($images_array,JSON_UNESCAPED_SLASHES);

?>