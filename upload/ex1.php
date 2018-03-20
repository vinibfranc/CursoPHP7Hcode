<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 19/03/2018
 * Time: 10:48
 */
if($_SERVER["REQUEST_METHOD" === "POST"]){
    $file = $_FILES["fileUpload"];
    if($file["errors"]){
        throw new Exception("Error: ".$file["errors"]);
    }
    $dirUploads = "uploads";
    if(!ir_dir($dirUploads)){
        mkdir($dirUploads);
    }
    if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){
        echo "Upload realizado com sucesso";

    }else {
        echo "Não foi possível fazer o upload";
    }
}
?>