<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 23:25
 */

if(!is_dir("images"))mkdir("images");
foreach (scandir("images") as $item){
    if(!in_array($item, array(".",".."))){
        unlink("images/".$item);
    }
}
echo "OK";