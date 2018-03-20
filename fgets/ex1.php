<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 19/03/2018
 * Time: 10:20
 */

$filename = "usuarios.csv";
if(file_exists($filename)){
    $file = fopen($filename, "r");
    $headers = explode(",", fgets($file));
    //var_dump($headers);

    $data = array();
    while($row = fgets($file)){
        $rowData = explode(",",$row);
        $linha = array();
        for($i = 0; i < count($headers); $i++){
            $linha[$headers[$i]] = $rowData[$i];
        }
        array_push($data, $linha);
    }

    fclose();
    echo json_encode($data);
}