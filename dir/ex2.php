<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 22:44
 */
$images = scandir("images");
$data = array();
foreach ($images as $img){
    if(!in_array($img, array(".",".."))){
        $filename = "images".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/dir/".str_replace("\\","/",$filename);
        array_push($data, $info);
    }
}
echo json_encode($data);
